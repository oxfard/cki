# ЦКИ
Тестовое задание ЦКИ

## Системные требования
* PHP 7.4+
* MySQL 5.6+ или MariaDB 10+
* Laravel 8+

## Развертывание проекта
#### 1 Выполнить в консоли
```bash
# Клонировать проект
git clone git@github.com:oxfard/cki.git

# Из корня проекта
composer install
cp .env.examle .env
php artisan key:generate

sudo chown www-data:www-data storage/logs
sudo chown www-data:www-data storage/framework/cache
```
#### 2 Создать бд

#### 3 Прописать в .env

```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

#### 4 Накатить миграции
```
php artisan migrate
```

#### 5 Накатить сиды
```
php artisan db:seed
```

#### 6 Настроить  веб-сервер и php

```
# Пример настройки nginx для работы с php7.4-fpm
server {
        server_name  cki.loc;
        listen       80;

        root         /path_to_project/cki/public;
        index index.php;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location ~ \.php$ {
            fastcgi_pass unix:/run/php/php7.4-fpm.sock;
            include snippets/fastcgi-php.conf;
        }
}

```

## Работа с сервисом

#### Записать данные 
```
# Пример
POST http://cki.loc/api/v1/parameters?p=67.9
```
Буква в параметре определяет тип датчика:
* t - термометр
* p - манометр
* v - тахометр


#### Получение за период
```
# Пример
GET http://cki.loc/api/v1/parameters?start_dt=2024-04-07 00:38:12&end_dt=2024-06-01&type=p
```
Обязательно указать тип датчика и обе крайние даты

### Развертывание с помощью Docker
Заполняем данные коннекта к бд в .env

Затем:
```
docker-compose build app
docker-compose up -d
```
