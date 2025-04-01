# Web_socket

## Установка проекта

Для запуска проекта локально выполните:


```bash
    cp .env.example .env
    composer i
    npm run dev
    vendor/bin/sail build
    vendor/bin/sail artisan migrate:fresh
    vendor/bin/sail up -d
```

## Проверка 

1. http://localhost/message
