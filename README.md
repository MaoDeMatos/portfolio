# Portfolio

Personal portfolio hosted [here](https://maodematos.rf.gd/).

I'm using [Haikei](https://app.haikei.app/) to generate styling elements.

## Run the app

The app runs with two docker containers :
- Linux Alpine NGINX server
- Linux Alpine PHP-fpm server

Use :
- `docker-compose up -d` to run the app in dev mode (with this repo mounted to the app)
- `docker-compose -f "docker-compose.yml" up -d` to build a lighter version of the app (only necessary files are copied to the images)

And :
- `docker-compose stop` to stop it
- `docker-compose down` to completely remove it
