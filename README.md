# Portfolio

Personal portfolio hosted [here](https://maodematos.rf.gd/).

I'm using :

- PHP/HTML - SCSS - JS/JQuery
- [Live SASS Compiler](https://marketplace.visualstudio.com/items?itemName=glenn2223.live-sass) to compile SCSS to CSS.
- [Haikei](https://app.haikei.app/) to generate styling elements.

## Run the app

The app runs with two docker containers :
- NGINX server
- PHP-fpm server

Just use `docker-compose up -d` to run the app and `docker-compose stop` to stop it (or `docker-compose down` to completely remove it).