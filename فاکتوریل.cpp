#include <iostream>
using namespace std;
int main()
{
    int n, res;
    cin>>n;
    res = n;
    while(n>1)
    {
        n--;
        res *= n;
    }
    cout<<res;
}