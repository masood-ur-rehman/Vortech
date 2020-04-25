# Vortech - Symfony 5 - Admin

### Installation
```sh
$ git clone https://github.com/masood-ur-rehman/Vortech.git
$ composer install/update 
```

### Running
```sh
$ php bin/console doctrine:migrations:migrate
$ php bin/console doctrine:fixtures:load --append
$ symfony server:start
```