# Be Profit
## Home Assignment


[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

    A simple migration , seeder and api app.


## Requirements

- docker
- docker-compose
- composer ^2



## Installation

create env file from example .

```sh
cp .env.example .env
```
Install the dependencies and devDependencies .

```sh
composer install
```

Start the server, db and phpmyadmin.

```sh
./vendor/bin/sail up
```
The server should run on http://localhost
## Migrations and Seeder
This action will create the database be-profit with the data from the external api .
```sh
sail php artisan migrate:fresh --seed 
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
 
