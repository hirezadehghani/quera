// time limit!!!!
#include <iostream>
using namespace std;

int main()
{
    int a[1000], input, i;
    
    cin >> input;
i =0;
while(input != 0)
    {
        a[i] = input;
        cin>>input;
    i++;
    }
            for (int j = i-1; j >=0; j--)
            {
                cout<<a[j]<<endl;
            }

}