#include <stdio.h>

// I am cheating here... but this
// should be a more complex program
// anyway...
__asm__("pop %rdi\n\t"
        "ret\n\t");

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
