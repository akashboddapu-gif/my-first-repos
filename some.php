#include <stdio.h>
int main() 
{
    int a, b, c, sum;
    printf("Enter two numbers: ");
    scanf("%d %d %d", &a, &b, &c);
    sum = a + b + c;
    printf("Sum of %d and %d is %d\n", a, b, c, sum);
    return 0;
}
