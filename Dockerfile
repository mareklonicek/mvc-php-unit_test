# Používáme oficiální PHP image jako základ
FROM php:8.1-apache

# Instalace Composeru (správce závislostí pro PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Aktivace modulu mod_rewrite pro Apache
RUN a2enmod rewrite

# Nastavení pracovního adresáře v Docker containeru
WORKDIR /var/www/html

# Kopírování aplikace do kontejneru
COPY . .

# Instalace PHP závislostí pomocí Composeru
RUN composer install

# Exponování portu, na kterém poběží server
EXPOSE 80

# Spuštění Apache webového serveru
CMD ["apache2-foreground"]
