## Running

See README.md for details of the challenge.

## Running

Clone the repository.
Change directory into the cloned project.
Run the following command.

```sh
$ docker-compose up
```

Browse here,
```
http://localhost/
```

To run PHP scripts,
```
docker exec -it php7-dockerized_php_1 sh
cd default
php index.php
```

Tests, Initially, 
Within /php7-dockerized/www/default$
```
alias phpunit="./vendor/phpunit/phpunit/phpunit"
```

```
phpunit
```

## Issues



## Boilerplate

This project was bootstrapped with php7-dockerized

I've added phpMyAdmin has been added, localhost:8081

https://github.com/hamptonpaulk/php7-dockerized

## Technology included

* [Nginx](http://nginx.org/)
* [MySQL](http://www.mysql.com/)
* [PHP 7](http://php.net/)

## Requirements

* [Docker Native](https://www.docker.com/products/overview)
# docker-php-nginx-mysql-phpMyAdmin
