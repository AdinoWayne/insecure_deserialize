# docker-compose-php

docker-compose setup to run latest PHP 7 under Nginx with every container outputting it's logging
to the docker daemon.

# Purpose

Create the ultimate development environment

# Run
	
	$ git clone https://github.com/devigner/docker-compose-php.git
	$ cd docker-compose-php
	$ docker-compose build
	$ docker-compose up -d

# Test

Open url http://localhost and you will see a phpinfo page
