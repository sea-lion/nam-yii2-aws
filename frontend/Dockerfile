FROM yiisoftware/yii2-php:8.1-apache

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/frontend/web|g' /etc/apache2/sites-available/000-default.conf

#RUN chmod 777 /app/frontend/web/assets
#RUN chmod 777 /app/frontend/web/documents
#RUN chmod 777 /app/frontend/runtime

