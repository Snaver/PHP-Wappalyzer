# PHP-Wappalyzer

(
- heroku buildpacks:set heroku/php
- heroku buildpacks:set https://github.com/heroku/heroku-buildpack-php
)

- heroku config:set HEROKU_PHP_PLATFORM_REPOSITORIES="https://heroku-v8js.s3.amazonaws.com/dist-cedar-14-stable/packages.json"