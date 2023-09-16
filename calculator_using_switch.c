
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

