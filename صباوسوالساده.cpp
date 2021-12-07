#include <iostream>
using namespace std;
int main()
{
    int n,k,res2;
    float res;
    cin>>n>>k;
    res = (float)n;
    for (int i=0; i<k ; i++)
    {
        res /=2;
    }
    res2 = (int)res;
        // cout<< res<<endl<<res2<<endl<<res-res2<<endl;
    if(res < 0 && (res-res2)!=0)
        res--;
    res = (int)res;
    cout<< res;
}