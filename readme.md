## About
This project is my first project use php laravel framework. This website is a community website like instagram. You can upload picture in your own post, search others' posts, and view their posts or profile.

## Environment
- php 7.2.8
- Laravel Framework 5.6.33
- XAMPP Version 7.2.8

## Website features
- registration
- post own post
- edit profile
- search user
- view others' posts and profile

## How to run this project
Because some files are ingored. So you should reduce these files.
1. Clone this project.
2. Reduce vendor folder
```
composer install
```
3. Reduce .env
```
cp .env.example .env

php artisan key:generate
```
4. Set database schema in .env file. For example, if you use mysql, you should change the DB_CONNECTION=mysql section.
5. Rebuild your database
```
php artisan migrate

php artisan db:seed
```
## Demo
[Demo vedio](https://youtu.be/OASgyba81fs)