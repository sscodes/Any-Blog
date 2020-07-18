FROM ubuntu

ENV DEBIAN_FRONTEND noninteractive 

ENV DEBCONF_NONINTERACTIVE_SEEN true 

RUN apt-get update

RUN apt-get -y install apache2

RUN apt-get install php

ADD . /var/www/html

ENTRYPOINT apachectl -D FOREGROUND

ENV name Intellipath
