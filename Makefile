.PHONY: install

BASE_DIR = $(CURDIR)

CC := gcc
OUTPUT_DIR ?= $(BASE_DIR)/binaries

CFLAGS = -O0 -g
EXECSTACK_FLAGS = -z execstack
LAZY_FLAGS = -z lazy
NOCANARY_FLAGS = -fno-stack-protector
NOPIE_FLAGS =  -no-pie
NORELRO_FLAGS = -z norelro

BINARIES = aslr stack-canary simple-bo-exec simple-bo-ret simple-bo-rop simple-bo-rop-lazynopie simple-bo-var
SUID_BINARIES = simple-bo-exec simple-bo-ret simple-bo-rop simple-bo-rop-lazynopie

all: $(BINARIES)

aslr: aslr.c
	$(CC) $(CFLAGS) $< -o $@

stack-canary: stack-canary.c
	$(CC) $(CFLAGS) $< -o $@

simple-bo-exec: simple-bo-exec.c
	$(CC) $(CFLAGS) $(NOCANARY_FLAGS) $(EXECSTACK_FLAGS) $< -o $@

simple-bo-ret: simple-bo-ret.c
	$(CC) $(CFLAGS) $(NOCANARY_FLAGS) $(NOPIE_FLAGS) $< -o $@

simple-bo-rop: simple-bo-rop.c
	$(CC) $(CFLAGS) $(NOCANARY_FLAGS) $< -o $@

simple-bo-var: simple-bo-var.c
	$(CC) $(CFLAGS) $< -o $@

simple-bo-rop-lazynopie: simple-bo-rop-lazynopie.c
	$(CC) $(CFLAGS) $(NOCANARY_FLAGS) $(LAZY_FLAGS) $(NOPIE_FLAGS) $< -o $@

clean:
	rm -rf $(OUTPUT_DIR) $(BINARIES)

install: all
	-mkdir $(OUTPUT_DIR)

	for binary in $(BINARIES) ; do \
		install -m 0755 $${binary} $(OUTPUT_DIR) ; \
	done
	for sbinary in $(BINARIES) ; do \
		sudo install -m 4755 -o root $${sbinary} $(OUTPUT_DIR)/$${sbinary}-setuid ; \
	done

