# What is this?

This is a collection of simple programs and exploits to demostrate some stack-based buffer overflow techniques.

***Note that if you haven't attended the Ethical Hacking Lab classes, this stuff probably won't make much sense :-)***

# How to use it?

Clone the repo

```sh
git clone https://github.com/dguerri/ethl.git
```

Cd into it

```sh
cd ethl
```

Make!

```sh
make install
```

The makefile requires the user to be in the sudoers because some executables will need to have the setuid bit set.

After building the binaries, you can try the exploits in the `exploits` directory.
