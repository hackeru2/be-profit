# Be Profit
## Home Assignment


[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

    A simple migration , seeder and api app.


## Requirements

- docker
- docker-compose



## Installation

create env file from example .

```sh
cp .env.example .env
```
Install the dependencies and devDependencies .

```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Start the server, db and phpmyadmin.

```sh
./vendor/bin/sail up
```
The server should run on http://localhost
## Migrations and Seeder
This action will create the database be-profit with the data from the external api .
```sh
./vendor/bin/sail php artisan migrate:fresh --seed 
```

## Api
| Method           | Path                              |
|------------------|-----------------------------------|
| Net Sales        | http://localhost/net-sales        |
| Production costs | http://localhost/production-costs |
| Gross profit     | http://localhost/gross-profit     |
| Gross margin     | http://localhost/gross-margin     |

## PhpMyAdmin

```sh
http://localhost:7080
```
 

## License

MIT
 
