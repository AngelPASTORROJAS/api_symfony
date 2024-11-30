## [creation api](https://symfony.com/doc/current/setup.html)

## [Creation des database](https://symfony.com/doc/current/doctrine.html)
on a utiliser sqlite : dans le .env on décommmente sqlite et on commente postgre

## [Ajout de fixture](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html)

## [installation api plateform](https://api-platform.com/docs/core/getting-started/)
s
## [docs api plateform](https://api-platform.com/docs/distribution/)

## [test](https://aymeric-cucherousset.fr/symfony-6-tester-une-api/)
ApiTestCase => class: [ProductApiTest](https://api-platform.com/docs/core/testing/)

```shell
composer require --dev symfony/browser-kit symfony/http-client
php bin/phpunit #librairie de test

#.env.test ajouter le sqlite
php bin/console doctrine:database:create --env=test

#optionnel : pour executer
symfony console d:f:l --env=test --no-interaction && php bin/phpunit
```