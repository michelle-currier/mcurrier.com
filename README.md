# mcurrier.com

backup of my website

## put your repo inside of the xampp/htdocs directory to run with XAMPP!!!

open xampp and start apache and navigate to `http://localhost/mcurrier.com/`

#

## run the docker file

### this might have worked but the permissions when I had it in a directory on my desktop blocked step 3

also moved it to the xampp/htdocs and changed the local dir on the docker run still no dice.

`docker build -t my-php-app .` then do `docker run -it --rm --name my-running-app my-php-app`

Now to run the image do:
`docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache` # This line for \*nix users
or
still doesn't work though...
`docker run -d -p 80:80 --name my-apache-php-app -v C:\xampp\htdocs\mcurrier.com\php-docker:/var/www/html php:7.2-apache` # For Windows users
