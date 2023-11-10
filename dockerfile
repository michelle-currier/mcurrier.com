FROM php:7.4-cli
COPY . /dist
WORKDIR /dist
CMD [ "php", "./index.php" ]