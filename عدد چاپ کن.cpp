#include <iostream>
#include <string>

using namespace std;
int main()
{
	long long int k =0, baghimande;
	string t, a;
	cin>>t;
	a = t;
	int* arr = new int[t.size()];
	while (k != t.size())
	{
		arr[k] = t[k] - '0'; 
        k++;
	}
	k = 0;
	while (k != t.size())
		{
			cout<< arr[k] <<": ";
			for (int j =0 ; j < arr[k]; j++)
				cout << arr[k];
			k++;
					cout<<endl;

		}
	}