## Génération Doc automatique
Quel outil utiliser en JS à ce sujet?
- Jsdoc

Donne les 3 mots-clés les plus intéressants pour documenter une fonction:
```js
/**
 * @param
 * @return
 * @example
*/
```

## Méthodo Git
A quoi sert Husky? 
Husky défini des hooks Git pour exécuter des scripts avant ou après des actions Git.
Exemples: 
- lors d'une création d'une branche.
- lors d'une validation d'un commit

Quelle est la forme d'un commit conventionnel? voir [Le commit parfait](https://www.conventionalcommits.org/fr/v1.0.0/)
```
<type>(<scope>): <subject>

<optionnel> <body>

<optionnel> <footer>
```
Le <type> représente le type de commit (feat, fix, docs, style, refactor, test, chore, etc.)s
Le <scope> précise la portée du changement effectué (par exemple, le nom du module ou du dossier modifié)
Le <subject> représente un court résumé du changement effectué.
Le <body> et le <footer> sont optionnels et sont utilisés pour fournir plus de détails sur le changement effectué ou pour inclure des informations de référence ou de configuration.

## Les tests
### La théorie
Cite moi les 3 grandes familles de tests et une explication, leurs différences:
- Les tests unitaires : qui vérifient le comportement d'une petite partie de code, telle qu'une fonction ou une méthode.
- Les tests d'intégration : qui vérifient l'interaction entre différentes parties du système.
- Les tests fonctionnels : qui vérifient que le système fonctionne correctement selon les attentes de l'utilisateur final.

Donne un petit exemple:
```
// import isMajor from "./app";

let isMajor = require("./app");

test("Quand t'as 19 ans, t'es censé être majeur", () => {
  let age = 12;
  let res = isMajor(age);
  expect(res).toBe(false);
});

```
### Le Front
Quels outils employer pour chaque catégorie de test?
- jest : js

### Le Back
Quel est l'outil permettant de tester en PHP?
```shell
php bin/phpunit
```

Comment concevoir et utiliser un environnement de test en Symfony?
- [Documentation symfony pour test](https://aymeric-cucherousset.fr/symfony-6-tester-une-api/)
ApiTestCase => class: [ProductApiTest](https://api-platform.com/docs/core/testing/)

```shell
composer require --dev symfony/browser-kit symfony/http-client
php bin/phpunit #librairie de test

#.env.test ajouter le sqlite
php bin/console doctrine:database:create --env=test

#optionnel : pour executer
symfony console d:f:l --env=test --no-interaction && php bin/phpunit
```

Donne moi ta démarche pour créer (très) rapidement une API avec Symfony
j'ai suivi la documention :
- [installation api plateform](https://api-platform.com/docs/core/getting-started/)
s
- [docs api plateform](https://api-platform.com/docs/distribution/)


Que teste t'on pour une API généralement?
On teste généralement que les requêtes soient bient appelé.


## Les failles de sécurité
Expliquer comme si j'étais ta grand-mère, avec tes mots:

L'injection SQL
```
L'injection SQL est une technique d'attaque sur les bases de données qui consiste à injecter du code SQL malveillant dans une requête pour accéder, modifier ou supprimer des données non autorisées.
```

La faille XSS
```
La faille XSS est une vulnérabilité de sécurité qui permet à un attaquant d'injecter du code malveillant dans une page Web.
```

Le CSRF
```
Le CSRF (Cross-Site Request Forgery) est une attaque qui exploite la confiance d'un site Web envers un utilisateur authentifié pour effectuer des actions malveillantes à son insu sur ce site.
```