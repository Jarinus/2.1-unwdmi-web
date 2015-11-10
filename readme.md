# Weather Data Tool - Kyoto University

Project 2.1 for the Hanze Hogeschool, consisting of a weather statistics web
application.

:sunny: :snowflake: :umbrella: :cloud: :snowman: :zap: :cyclone:

## Dependencies

Building requires Composer and NPM@2+. Running

```
composer install
```

in the project root directory will install all back-end Composer dependencies
and front-end NPM dependencies.

The build process compiles Sass stylesheets from `resources/assets/sass` to a
CSS file at `public/style/app.css`, and the JSX source code from
`resources/assets/js` to a JS file at `public/js/app.js` using Babel@5.

## Running

The Laravel application can be run with live data in conjuction with the storage
server at [IcyPalm/2.1-unwdmi-server](https://github.com/IcyPalm/2.1-unwdmi-server)
and the generator provided with the Learning Tasks material.

## Licence

[MIT](./LICENSE)
