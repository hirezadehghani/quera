#include <iostream>
using namespace std;

int main(){
	long long int x1, x2, y1, y2;
	cin>>x1>>y1>>x2>>y2;
	while(1){
			if (y1 == y2 & x1 != x2){
		cout<<"Horizontal";
				break;
	}
	else if(x1 == x2 & y1 != y2 ){
		cout<<"Vertical";
		break;
	}
	else{
		cout<<"Try again";
				break;
	}
	}
}