FROM dreamlabs/php-composer:latest

RUN composer global require squizlabs/php_codesniffer && \
    ln -s /root/.composer/vendor/bin/phpcbf /usr/bin/phpcbf && \
    ln -s /root/.composer/vendor/bin/phpcs /usr/bin/phpcs;

CMD ["phpcs"]