#php -S 0.0.0.0:8080 index.php
 docker run  -p 9000:9000   -v $(pwd):/var/www/creche  php:7.3-cli php -S 0.0.0.0:9000 -t /var/www/creche/ /var/www/creche/index.php
