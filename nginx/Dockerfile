FROM ubuntu:14.04
MAINTAINER leo.rutten@kuleuven.be
ENV REFRESHED_AT 2015-05-08
RUN apt-get update
RUN apt-get install -y nginx
RUN mkdir -p /var/www/html
ADD nginx/global.conf /etc/nginx/conf.d/
ADD nginx/nginx.conf /etc/nginx/nginx.conf
VOLUME ["/var/www/html"]
EXPOSE 80
CMD nginx
