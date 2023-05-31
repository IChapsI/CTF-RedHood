FROM ubuntu

RUN apt-get update && apt-get install -y apache2
RUN rm -rf /var/www/html

COPY html /var/www/

EXPOSE 80
EXPOSE 443

CMD ["apache2ctl", "-D", "FOREGROUND"]

