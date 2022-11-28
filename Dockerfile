FROM php:7.4-cli
COPY src /src/
WORKDIR /src/
CMD [ "php", "./index.php" ]