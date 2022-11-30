# php-dev

## Usage
- clone this repo
```bash
git clone https://github.com/gh-tyl/php-dev.git
cd php-dev
```

- copy env.example to .env and edit it
```bash
cp env.example .env
```

- write down some value after = in .env
```
MYSQL_ROOT_PASSWORD=
MYSQL_DATABASE=
MYSQL_USERNAME=
MYSQL_PASSWORD=
WEB_PORT=
DB_PORT=
```

- run docker-compose
```bash
docker-compose up -d
```

- open http://localhost:[WEB_PORT]/ in your browser