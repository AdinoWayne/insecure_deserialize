# docker-compose-php
apt-get install --yes zip unzip
docker-compose setup to run latest PHP 7 under Nginx with every container outputting it's logging
to the docker daemon.

# Purpose

Create the ultimate development environment

# Run
	$ cd docker-compose-php
	$ docker-compose build
	$ docker-compose up -d
	go to docker-compose-php_nginx-proxy_1

# Test

Open url http://localhost and you will see a phpinfo page

# Reference
https://jagskap.blogspot.com/2019/07/insecure-deserialization-in-php.html
https://medium.com/bugbountywriteup/demystifying-insecure-deserialization-in-php-684cab9c4d24
https://www.netsparker.com/blog/web-security/untrusted-data-unserialize-php/
https://portswigger.net/web-security/deserialization
https://blog.ripstech.com/2018/new-php-exploitation-technique/
https://github.com/s-n-t/presentations/blob/master/us-18-Thomas-It's-A-PHP-Unserialization-Vulnerability-Jim-But-Not-As-We-Know-It.pdf