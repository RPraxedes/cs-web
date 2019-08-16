# Installing the CS Website to an Apache Server:

1. Install Apache Web Server.

2. Install PHP.

3. Download and Install MySQL.

4. Install Composer:

	curl -sS https://getcomposer.org/installer | php
	
	sudo mv composer.phar /usr/local/bin/composer
	
	sudo chmod +x /usr/local/bin/composer
	
5. Install Laravel globally using Composer. Package name of Laravel is laravel/laravel:

	composer global require laravel/laravel
	
OR

5. Install Laravel within the web app using Composer. Go to the application directory and enter:

	composer install
	
6. Move the web app to Apache web root:

	sudo mv example /var/www/html/
	
	sudo chgrp -R www-data /var/www/html/example/
	
	sudo chmod -R 775 /var/www/html/example/storage
	
7. Create a new virtual host:

	cd /etc/apache2/sites-available
	
	sudo nano cs-web.conf
	
---

<VirtualHost *:80>
   ServerName thedomain.com
   ServerAdmin webmaster@thedomain.com
   DocumentRoot /var/www/html/example/public

   <Directory /var/www/html/example>
       AllowOverride All
   </Directory>
   ErrorLog ${APACHE_LOG_DIR}/error.log
   CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

---

8. Disable the default configuration file of the virtual hosts in Apache:

	sudo a2dissite 000-default.conf
	
9. Enable new virtual host:

	sudo a2ensite cs-web
	
10. Enable the Apache rewrite module, and restart the Apache service:

	sudo a2enmod rewrite
	
	sudo systemctl restart apache2
	