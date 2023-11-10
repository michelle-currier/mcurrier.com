# mcurrier.com

backup of my website

## put your repo inside of the xampp/htdocs directory to run with XAMPP!!!

open xampp and start apache and navigate to `http://localhost/mcurrier.com/`

#

## run the docker file

## this might have worked but the permissions blocked step 3

`docker build -t my-php-app .` then do `docker run -it --rm --name my-running-app my-php-app`

Now to run the image do:
`docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache` # This line for \*nix users
or

`docker run -d -p 80:80 --name my-apache-php-app -v C:\Users\MichelleCurrier\Desktop\ibm_portfolio\mcurrier.com\php-docker:/var/www/html php:7.2-apache` # For Windows users
