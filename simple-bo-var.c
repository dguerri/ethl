#include <stdio.h>
#include <string.h>

#define MAX_BUF_LEN 1024
#define STDIN 0

int authenticate(const char* a_password) {
  struct {
    char password[128];
    int password_match;
  } locals;

  printf("Enter your password:\n");
  read(STDIN, locals.password, MAX_BUF_LEN);

  if (strcmp(locals.password, a_password) == 0) {
    locals.password_match = 1;
  }

  return locals.password_match;
}

int main() {
  if (authenticate("very-hard-pass!")) {
    printf("You are authenticated!\n");
  } else {
    printf("Go away imposter!\n");
  }

  return 0;
}
