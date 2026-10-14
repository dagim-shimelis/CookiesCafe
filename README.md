
# [CookiesCafe]( https://cookies-cafe.herokuapp.com )
A website for a fictional cafe brand 

[visit-site](  https://cookies-cafe.herokuapp.com )

## Inspiration 

i had the idea for this project soon after i started learning web development during the pandemic, and started working on it right away.

## Design 

the website was designed with an intension of giving the viewer a warm and welcoming feeling while displaying all the attractive features of the cafe.

## Features

among the many features that have been implemented in this website, some of the few that pop out from the rest are the elegant animations and the colorfull ordering page.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
contributors are more than welcome to work on the backend of this project.

## Deploy to Vercel

Import this repository into Vercel, with the repository root as the Root Directory
and **Other** as the Framework Preset. Use **Node.js 22.x**, the `npm run build`
Build Command, and the `public` Output Directory. No environment variables or
database are required.

`vercel.json` uses the community [PHP runtime](https://github.com/vercel-community/php)
at `vercel-php@0.9.0` (PHP 8.5). The older `0.5.2` runtime pins Node.js 14.
`api/index.php` serves `/` and the existing `.php` page URLs, including form POSTs.
The build copies static assets and HTML pages into `public`; PHP source, includes,
logs, and SQL files are not published as static downloads.

This is a fictional cafe demo. The order confirmation does not store orders,
send notifications, process payments, or generate a verification ID. Contact and
newsletter features also have no backend.

## Run and check locally

With PHP 8.5 and Node.js 22 installed, run `php -S localhost:8000` from the
repository root, then open `http://localhost:8000`. No npm dependencies are needed.

Run `npm test` to check page rendering, POST handling, private-path rejection,
and the static build output. `npm run build` creates the `public` asset directory.
These checks do not replace a Vercel preview deployment.

## License
[MIT](https://choosealicense.com/licenses/mit/)
