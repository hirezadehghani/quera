#include <iostream>
#include <string>

using namespace std;
int main()
{
	int v, a;
	string k, adad="";
	a = 4000;
	cin >> v;
	k =  a;
	for(int i =1 ; i<a+1; i++){
		adad += to_string(i);
	}
	cout << adad[v-1];
}