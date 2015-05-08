mkdir /tmp/webapp
rsync -rav * /tmp/webapp/
docker run -d -p 4567:4567 -v /tmp/webapp:/opt/webapp lrutten/sinatra
