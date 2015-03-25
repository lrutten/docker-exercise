# LAMP demo in Docker

This is a small demo which demonstrates the use of LAMP components in Docker.

## Image

The image is derived from an existing image:

* [https://github.com/tutumcloud/tutum-docker-lamp](https://github.com/tutumcloud/tutum-docker-lamp)

The `Dockerfile` can be found in the `build/` directory.


## Steps

Thes are the steps to be executed in order to start the demo.

### Copy `.html` and `.php` files

~~~~
make-tmpapp.sh
~~~~

### Start the container


~~~~
run.sh
~~~~

 
### Prepare the  database

~~~~
mysql -h172.17.42.1 -u admin -P3306 -ppaswoord
select version(), current_date;
select users();
show databases;
create database test;
use test;
show tables;
create table steden(naam varchar(30), postnummer varchar(10));
describe steden;
insert into steden values('Diepenbeek', '3590');
insert into steden values('Hasselt', '3500');
select * from steden;
~~~~


Instead of typing all these commands the fiollowing script will do
the work.

~~~~
fill-database.sh
~~~~

### Check the database

This URL will show the content of the database.

~~~~
http://localhost/database.php
~~~~

