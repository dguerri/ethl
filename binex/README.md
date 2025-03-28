# What is this?

This is a collection of simple programs and exploits to demonstrate some stack-based buffer overflow techniques.

***Note that if you haven't attended the Ethical Hacking Lab classes, this stuff probably won't make much sense :-)***

## How to use it?

### Cd into binex directory

```sh
cd binex
```

### Make

```sh
make install
```

By default `make install` installs files in the `./binaries` directory

### Note

The `Makefile` requires the user to be in the sudoers because some executables will need to have the `setuid` bit set.

After building the binaries, you can try the exploits in the `exploits` directory.
