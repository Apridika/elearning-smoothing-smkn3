FROM richarvey/nginx-php-fpm:3.1.6

COPY . /var/www/html

ENV REPO_SCENARIO="laravel"
ENV WEBROOT="/var/www/html/public"
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer install --no-dev --optimize-autoloader

CMD ["/start.sh"]