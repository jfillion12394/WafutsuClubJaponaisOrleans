# CHECKPOINT 4

Projet : développer le site du club japonisant "Wafustu" d'Orléans

「和仏」日本語会話クラブ


SCOPE DU POJET

En tant qu’ utilisateur, jeux peux :

 - Accéder à la page d’accueil pour m’informer sur l’activité du club
 - consulter les différentes offres de cours et d'activités linguistiques en japoanais disponibles
 - m'inscrire sur le site pour rejoindre le Wafutsu Club
 - m'inscrire sur un cours ou activités en fonction des places dipsonibles



Prerequisites
Check composer is installed
Check yarn & node are installed
Install
Clone this project
Run composer install
Run yarn install
Run yarn encore dev to build assets


Working
Run symfony server:start to launch your local php web server
Run yarn run dev --watch to launch your local server for assets


Testing
Run .vendor/bin/phpcs to launch PHP code sniffer
Run .vendor/bin/phpstan analyse src --level max to launch PHPStan
Run .vendor/bin/phpmd src text phpmd.xml to launch PHP Mess Detector
Run ./node_modules/.bin/eslint assets/js to launch ESLint JS linter
Run ../node_modules/.bin/sass-lint -c sass-linter.yml -v to launch Sass-lint SASS/CSS linter


Windows Users
If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

git config --global core.autocrlf true

Deployment








