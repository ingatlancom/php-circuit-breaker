Contributing
------------

#### Install dependencies

```bash
docker-compose run --rm -u $(id -u):$(id -g) php composer install
```

#### Run docker

```bash
docker-compose up -d memcached redis
```

#### Run unit tests

```bash
docker-compose run --rm -u $(id -u):$(id -g) php composer tests
```

### Run security check

```bash
docker-compose run --rm -u $(id -u):$(id -g) php composer sc
```
