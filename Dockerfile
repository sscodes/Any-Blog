FROM ubuntu

ENV DEBIAN_FRONTEND noninteractive 

ENV DEBCONF_NONINTERACTIVE_SEEN true 

RUN apt-get -y update

RUN apt-get -y install apache2

RUN apt-get install -y php

RUN rm /var/www/html/index.html

ADD . /var/www/html

ENTRYPOINT apachectl -D FOREGROUND

ENV name Intellipath

EXPOSE 80