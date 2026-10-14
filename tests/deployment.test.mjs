import assert from 'node:assert/strict';
import { execFileSync, spawnSync } from 'node:child_process';
import { existsSync, readdirSync, readFileSync } from 'node:fs';
import { test } from 'node:test';

function render(path, post = {}) {
  const result = spawnSync('php', ['-d', 'display_errors=stderr', '-d', 'error_reporting=-1', '-r', `
    $_SERVER['REQUEST_URI'] = $argv[1];
    $_POST = json_decode($argv[2], true);
    $_SERVER['REQUEST_METHOD'] = $_POST ? 'POST' : 'GET';
    register_shutdown_function(function () { fwrite(STDERR, (string) (http_response_code() ?: 200)); });
    require 'api/index.php';
  `, path, JSON.stringify(post)], { encoding: 'utf8' });
  assert.ifError(result.error);
  assert.equal(result.status, 0, result.stderr);
  return result;
}

test('all public PHP pages render without warnings', () => {
  for (const path of ['/', '/index.php', '/menu.php', '/order.php', '/location.php', '/contactUs.php', '/orderComplete.php', '/menu.php?category=cakes']) {
    const result = render(path);
    assert.equal(result.stderr, '200', path);
    assert.match(result.stdout, /<\/html>/i, path);
    assert.match(result.stdout, /js2\/main\.js/, path);
    assert.doesNotMatch(result.stdout, /<\?php/, path);
  }
});

test('demo order confirmation accepts POST without reflecting customer input', () => {
  const result = render('/orderComplete.php', { fullName: '<script>alert(1)</script>', telNumber: ['invalid'] });
  assert.equal(result.stderr, '200');
  assert.match(result.stdout, /ORDER COMPLETE/);
  assert.doesNotMatch(result.stdout, /<script>alert\(1\)<\/script>/);
});

test('private files, traversal and unknown pages return 404', () => {
  for (const path of ['/includes/constants.php', '/../index.php', '/%2e%2e/index.php', '//index.php', '//[invalid/', '/missing.php', '/debug.log', '/test.sql', '/.env', '/api/index.php']) {
    const result = render(path);
    assert.equal(result.stderr, '404', path);
    assert.equal(result.stdout, 'Not found', path);
  }
});

test('build publishes only static assets and preserves their paths', () => {
  execFileSync('npm', ['run', 'build'], { stdio: 'pipe' });
  const config = JSON.parse(readFileSync('vercel.json', 'utf8'));
  assert.equal(config.outputDirectory, 'public');
  assert.deepEqual(readdirSync('public').sort(), [
    'contactUs.html', 'css2', 'fonts2', 'images2', 'js2', 'menu-second-cutout.png', 'nothing.html', 'order.html', 'webfonts',
  ].sort());
  for (const asset of ['css2/styles.css', 'js2/main.js', 'images2/CookiesCafeLogo.png', 'fonts2/Abel/Abel-Regular.ttf', 'webfonts/fa-solid-900.woff2']) {
    assert.ok(existsSync(`public/${asset}`), asset);
  }
});
