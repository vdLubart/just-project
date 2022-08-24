# Just! CMS for developers

###__!!! WIP: The work is in progress for this project, some features are not fully operational !!!__

Just is a content management system for creating websites. It easy in use, supports a big
amount of different block types, each of them can customized on the project level.

## Installation

To install the CMS just clone this repository and run

```bash
composer install
```

The CMS based on the Laravel 8 framework, thus you can use all standard for Laravel 
configurations:
- setup the database connection in `.env` file. As usual, you can use the `.env.example` 
file as a template.
- run migration script:
```bash
php artisan migrate
```
- run server (optional):
```bash
php artisan serve
```
- seed the data specific for Just:
```bash
php artisan just:seed
```
This command adds admin and master users to the database to quick start. Now you can access
the admin panel by `http://localhost:8000/admin` and use the following credentials:

```bash
Admin role:
login: admin@just-use.it
password: admin

Master role:
login: master@just-use.it
password: master
```
__Note!__ Update you passwords after first access of the admin panel.
