FROM php:7.2.6-apache-stretch
RUN docker-php-ext-install mysqli
RUN cd /tmp && \
    curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \
    cp /tmp/phpcs.phar /usr/local/bin/phpcs && \
    chmod +x /usr/local/bin/phpcs