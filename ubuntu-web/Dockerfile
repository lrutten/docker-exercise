FROM ubuntu:14.04
MAINTAINER leo.rutten@kuleuven.be
RUN apt-get update
RUN apt-get install -y nginx
VOLUME ["/usr/share/nginx/html"]
EXPOSE 80
CMD service nginx start; while true; do sleep 1d; done

