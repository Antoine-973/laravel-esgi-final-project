## [ESGI] Projet Laravel - Site de vente de Pokémon ##

**Site de vente POKE-EBAY** est un projet développé dans le cadre du module Laravel par :
* SAUNIER Antoine
* MOHINDO Christian
* INTHASAKUBOL Calvin
* RASOANIRAHINA Prado

### Installation ###

Dans un terminal, exécuter les commandes suivantes :
* taper `git clone https://github.com/Antoine-973/laravel-esgi-final-project` pour cloner le dépôt.
* alternative : télécharger le projet sous format .zip, et décompressez-le.
* taper `cd {nom du projet}` // dossier root du projet.
* taper `composer install` pour installer les dépendances.
* taper `npm/yarn install`
* copier *.env.example* to *.env* à remplir avec vos paramètres de configuration.
* taper `php artisan key:generate` pour générer une clé d'encryption (`APP_KEY`) dans le fichier *.env*.
* taper `php artisan storage:link` pour pouvoir accéder aux photos enregistrées dans le dossier storage.
* définir les bonnes permissions `chmod 755 -R nomdevotreprojet/` et `chmod -R o+w nomdevotreprojet/storage`.
* nettoyer le projet `php artisan cache:clear`, `php artisan view:clear` et `php artisan config:clear`.
* configurer les options de connexion à la base de données dans le fichier *.env* :
   * renseigner `DB_HOST`
   * renseigner `DB_DATABASE` 
   * renseigner `DB_USERNAME`
   * renseigner `DB_PASSWORD`
* taper `php artisan migrate` pour créer les tables.
* taper `php artisan db:seed` pour générer les données pour préremplir la bdd.

### Lancer le serveur ###

Dans un terminal, exécuter la commande suivante :
* taper `php artisan serve`, le service web sera accessible depuis l'adresse http://localhost:8000/.

### Package utilisés ###

Pour nous aider dans le développement du projet, nous avons utilisé :
* laravel/ui pour générer l'authentification.
* bootstrap.
* cocur/slugify pour créer des slug.
* anhskohbo/no-captcha pour le système de captcha Google.
* darryldecode/cart pour l'implémentation d'un panier d'achat.

### Test de paiement ###
* Numéro de la carte - 4242 4242 4242 4242
* EXP - 12/32
* CVV - 123
* ZIP - 12345