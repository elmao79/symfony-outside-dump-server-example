# Symfony dump server outside Symfony
A Symfony dump server project example outside Symfony.

## Steps to try example inside a Docker container
Clone project:
```
git clone https://github.com/elmao79/symfony-outside-dump-server-example
```
Create Docker container where test project:
```
cd symfony-outside-dump-server-example/Docker
docker-compose up -d
```
Install dependencies:
```
docker-compose run php composer install
```
Open Symfony dump server in one console window:
```
docker-compose logs -f server
```

Into another console window execute tests:
```
docker-compose run client composer test
```

You'll see dumps into the first console window.