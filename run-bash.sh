docker run -i -t --name lampapptest1 -e MYSQL_PASS="paswoord" -v /tmp/app:/var/www/html -p 80:80 -p 3306:3306 lrutten/lamp-app /bin/bash

