#include <stdio.h>

void print_secret() {
  /* TODO: implement required access
   * control before calling this
   * function. Only Dave should have
   * access.
   */
  puts(
    "Dave, here are your Credit Card details\n"
    "NUMBER: 4877104837868894\n"
    "CVC   : 662\n"
    "EXPIRY: 07/2027\n"
  );
}

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
