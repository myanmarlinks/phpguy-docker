# DOCKER FOR PHP PREMIUM COURSE

docker နဲ့ docker-compose မသွင်းရသေးဘူးဆိုရင် သွင်းဖို့လိုပါတယ်။

- [Installer Docker](https://docs.docker.com/install/)
- [Installer Docker Compose](https://docs.docker.com/compose/install/)

docker နဲ့ docker-composer install လုပ်ပြီးပြီဆိုရင် `docker-compose.yml` ဖိုင်ရှိတဲ့ နေရာကနေ အောက်ပါ command ကို run ပါ။

```bash
docker compose build
docker composer up
```
**-d** means it will run in the background and your terminal will not be locked and to kill the process just
press `CTRL + C` on windows or `Command + C` on mac.

## Pre-configured images

- [Nginx](https://www.nginx.com/)
- [MySQL](https://www.mysql.com/)
- [PhpMyAdmin](https://www.phpmyadmin.net/)
- [PHP 8 FPM](https://php.net/)
  - [PHP Modules]
    - bcmath
    - Core
    - ctype
    - curl
    - date
    - dom
    - exif
    - fileinfo
    - filter
    - ftp
    - gd
    - hash
    - iconv
    - intl
    - json
    - libxml
    - mbstring
    - mysqli
    - mysqlnd
    - openssl
    - pcre
    - PDO
    - pdo_mysql
    - pdo_pgsql
    - pdo_sqlite
    - Phar
    - posix
    - rar
    - readline
    - redis
    - Reflection
    - session
    - SimpleXML
    - soap
    - sodium
    - SPL
    - sqlite3
    - standard
    - tokenizer
    - xdebug
    - xml
    - xmlreader
    - xmlwriter
    - xsl
    - Zend OPcache
    - zip
    - zlib

  - [Zend Modules]
    - Xdebug
    - Zend OPcache
