/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>
int main()
{
    
int a,b;
char i;
    printf("enter a=");
    scanf("%d",&a);
    printf("enter b=");
    scanf("%d",&b);
    printf("enter arithmetic operator=");
    scanf(" %c",&i);
    
    switch(i)
    {
    case '+': printf("sum=%d",a+b);     
    break; 
    case '-': printf("difference=%d",a-b);  
    break;
    case '*':printf("product=%d",a*b); 
    break;
    case '/':printf("quotient=%d",a/b); 
    break;
    
    return 0;
    }
}

