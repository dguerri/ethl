#include <stdio.h>

int fun1(int p1) {
  char buff[16];
  const int p2 = 2;
  return p1 + p1;
}

int main() {
  int res = fun1(4);
  printf("Hello World, %d\n", res);
  return 0;
}
