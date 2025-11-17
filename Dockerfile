# Используем официальный образ PHP FPM
FROM php:8.2-fpm

# Рабочий каталог в контейнере
WORKDIR /var/www/html

# Копируем файлы приложения в контейнер
COPY . /var/www/html

# Устанавливаем необходимые расширения (пример)
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# Открываем порт для веб-сервера (если используется)
EXPOSE 9000



