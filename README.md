# Description

Simple CRUD app using
* PHP/Laravel
* Composer
* Blade template engine
* Bootstrap
* WAMP local server (MySQL db)

# How to install

1) Clone project
2) Go to the folder application using cd command on your cmd or terminal
3) Run composer install on your cmd or terminal
4) Copy .env.example file to .env on the root folder. copy .env.example .env, or cp .env.example .env if using terminal
5) Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6) Run php artisan key:generate
7) Run php artisan migrate
8) Run php artisan serve
9) Go to http://localhost:8000/

# Routes

![Screenshot](screenshot.png)
