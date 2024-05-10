#include <stdio.h>

void get_user() {
  // Safe: no one has a name 
  // longer than 16 ascii character!
  char str[0x10];

  puts("What is your name?");
  gets(str);
  printf("Hello %s!\n", str);
}

void main() {
  get_user();
}
