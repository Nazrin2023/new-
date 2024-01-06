#include <stdio.h> 
int main()
{
    int x, y, temp; 
    printf("Enter the value of x,y :");
    scanf("%d%d", &x, &y);
    printf("Before Swapping x = %d\ny = %d \n",x,y);
    temp =x;
    x =y;
    y= temp;
    printf("After Swapping x= %d\ny= %d\n", x,y);
    return 0;
}