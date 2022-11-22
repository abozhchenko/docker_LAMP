# docker_LAMP
This project was created as part of the DevOps_15802 training course

## Aim of the project
You need to run the site from this [repository](https://github.com/mentorchita/Blood-Bank-Management-System) using [Docker Compose](https://docs.docker.com/compose/gettingstarted)

## Technologies used
- Frontend:  Apache, phpMyAdmin
- Backend: PHP, MySQL

## Installation
1. Clone this repository to localhost:
```sh
git clone https://github.com/abozhchenko/docker_LEMP.git
```
2. Edit credentials in files `.env` and `./app/files/connection.php` 
```sh
cd ./docker_LAMP
vi .env
vi ./app/files/connection.php
```
3. Start the project
```sh
docker compose build
docker compose up -d
```
4. Open phpMyAdmin and import `./SQL/BloodBank.sql` into `bloodbank` database
```sh
http://<ip-dockerhost>:8080
```
5. Go to webpage 
```sh
http://<ip-dockerhost>
```
## Description of the directory structure
| Direcrory | Contents |
| ------ | ------ |
|SQL|bloodbank.sql - dump|
|app|Website content|
|data|Database content. Appears after installation|
|log|Contains logs. Appears after installation|
|php|Dockerfile for build|

## Sources
- [PHP:Apache](https://hub.docker.com/_/php)
- [MySQL](https://hub.docker.com/_/mysql)
- [phpMyAdmin](https://hub.docker.com/_/phpmyadmin)
