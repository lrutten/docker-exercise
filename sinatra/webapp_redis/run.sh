mkdir /tmp/webapp
rsync -rav * /tmp/webapp/

# met bash
#docker run -t -i -p 4567:4567 --name webapp --link redis:db -v /tmp/webapp:/opt/webapp lrutten/sinatra /bin/bash

# als daemon
docker run -d -p 4567:4567 --name webapp --link redis:db -v /tmp/webapp:/opt/webapp lrutten/sinatra

