#include <iostream>
#include <stdlib.h>

using namespace std;
int main()
{
	char res;
	int a;
	cin>>a;
	for(int i =0; i <a; i++){
		int j = rand()%(10-1+1)+1;
			for(int k =0; k < j; k++){
			int r = rand()%(122-97+1)+97;
			res = r;
		cout<<"s"<<res;
		}
		cout<<endl;
	}
}