<?php

$path = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$page = $path === '/' ? 'index.php' : substr($path, 1);

// Only public pages may be included; request paths must never select arbitrary files.
if (!in_array($page, ['index.php', 'menu.php', 'order.php', 'location.php', 'contactUs.php', 'orderComplete.php'], true)) {
    http_response_code(404);
    echo 'Not found';
    return;
}

chdir(dirname(__DIR__));
require $page;
