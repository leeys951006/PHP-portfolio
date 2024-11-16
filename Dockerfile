# PHP-FPM 이미지 사용
FROM php:8.1-fpm

# 필요한 PHP 확장 설치
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli pdo pdo_mysql

# Composer 설치
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 작업 디렉토리 설정
WORKDIR /var/www/html

# 프로젝트 복사
COPY ./app /var/www/html/app
COPY ./public /var/www/html/public
COPY ./system /var/www/html/system
COPY ./writable /var/www/html/writable

# 권한 설정
RUN chown -R www-data:www-data /var/www/html

# 포트 노출
EXPOSE 9000
