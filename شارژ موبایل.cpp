#include <iostream>

using namespace std;

int main(){
	int k, sum =0 , tedad =0;
	cin>>k;
/*		for(int i=0; i<k ; i++){
		tedad++;
	}
	sum = tedad*((0+(k-1))/2);
	sum += tedad;
	cout<<sum;*/
	
	for(int i=0; i<=k-1 ; i++){
			for(int j=0; j<=k-1 ; j++){
			sum += ++i;
			}
	}
	cout<<sum;
}