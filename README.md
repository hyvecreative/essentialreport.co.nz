# essreportnz - Wordpress theme

#### Wordpress environment with Docker and Docker Compose

Theme location:
`` ./wp-content/themes/er-devsite ``

## Setup using docker-compose

Make sure you have the latest versions of **Docker** and **Docker Compose** installed on your machine.
Copy the **docker-compose.yml** file from this repository into a blank folder.

In the file you may change the IP address (in case you run multiple containers) or the database from mysql to mariadb.

##### Create containers

Open a terminal and *cd* to the folder you have the docker-compose.yml and run:
```
docker-compose up -d
```

This create 2 new folders beside your docker-compose.yml file.
* **wp-data** - used to store and restore database dumps
* **wp-app** - the location of your Wordpress application

The containers are now build and running. You should be able to access the Wordpress installation with the configured IP in the browser address. For convenience you may add a new entry into your hosts file.

##### Starting containers

You can start the containers with the up command in daemon mode (by adding **-d** as a param) or by using the start command:
```
docker-compose start
```

##### Stopping containers
```
docker-compose stop
```

##### Remove containers

To stop and remove all the containers use the **down** command
```
docker-compose down
```
... or the **rm** command if the containers are stopped already.
```
docker-compose rm
```

## Project from existing source

Copy the docker-compose.yml file into a new directory. In the directory you create two folders:
* **wp-data** - here you add the database dump
* **wp-app** - here you copy your existing wordpress code

You can now use the **up** command:
```
docker-compose up -d
```

This will create the containers and populate the database with the given dump. You may set your host entry and change it in the database, or you simply overwrite it in the **wp-config.php** by adding
```
define('WP_HOME','http://wp-app.local');
define('WP_SITEURL','http://wp-app.local');
```

## Creating database dumps
```
sudo ./export.sh
```
---
