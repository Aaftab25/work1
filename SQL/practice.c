// #include <stdio.h>

//     void mwall(int n);
// int main(void)
// {
//     // int n;
//     // printf("Enter N \n5");
//     // scanf("%d",&n);
//       int h = 0;   
//     do
//     {
//         printf("Heigth : ");
//         scanf ("%d",&h);
//     } while (!(h>=1 && h<=9));
//     mwall(h);
// }

// void mwall (int n){
//     for(int i=0; i<n; i++ ){
//         for (int k = n-i-1; k > 0; k--)
//         {
//             printf(".");
//         }
        
//             for(int j=0; j<=i; j++){
//                 printf("#");
//             }
//             printf("\n");
//         }  
// }

// Prints an n-by-n grid of bricks, re-prompting user for positive integer
 
// #include <cs50.h>
#include <stdio.h>
 
int get_size(void);
void print_grid(int n);
 
int main(void)
{
    int n = get_size();
    print_grid(n);
}
 
int get_size(void)
{
    int n;
    do
    {
        n = scanf("Size: ");
    }
    while (n < 1);
    return n;
}
 
void print_grid(int n)
{
    for (int i = 0; i < n; i++)
    {
        for (int j = 0; j < n; j++)
        {
            printf("#");                                             
        }
        printf("\n");
    }
}
                          