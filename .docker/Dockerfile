FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y 

RUN curl -LkSso /usr/bin/mhsendmail 'https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64'&& \
    chmod 0755 /usr/bin/mhsendmail && \
    echo 'sendmail_path = "/usr/bin/mhsendmail --smtp-addr=mailhog:1025"' > /usr/local/etc/php/php.ini;

RUN rm -rf /var/lib/apt/lists/*