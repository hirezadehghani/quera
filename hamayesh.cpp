#include <iostream>

using namespace std;

int main()
{
    int chair, radif, a , b;
    string jahat;

    cin >> radif>>chair;

if(chair <= 10 && chair >= 1)
    jahat = "Right";
else
    jahat = "Left";

// khoroji : a = radif , b = chair

a = 11-radif;

if(jahat == "Left")
b = 21-chair;
else if (jahat == "Right")
b = 0+chair;

cout<<jahat<<" "<<a<< " "<<b;
}