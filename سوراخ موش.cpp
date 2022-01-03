#include <iostream>
using namespace std;

int main(){
	long long int x1, x2, dis =0;
	cin >> x1 >> x2;
	while(1){
			if (x1 == x2){
		cout<<"Saal Noo Mobarak!";
				break;
	}
	else if(x2 > x1){
		dis = x2 - x1;
		for(int i=0; i<dis; i++)
			cout<<"R";
		break;
	}
	else if(x2 < x1){
		dis = x1 - x2;
		for(int i=0; i<dis; i++)
			cout<<"L";
				break;
	}
	}
}