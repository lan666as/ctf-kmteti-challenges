#include <stdio.h>

int is_prime(int x)
{
	int i;
	if (x==1) {
		return 0;
	}
	if (x==2) {
		return 1;
	}
	for (i=2; i*i<=x; i++) {
		if (x%i==0) {
			return 0;
		}
	}
	return 1;
}

int next_prime(int x){
    int ret = x+1;
    while(!is_prime(ret)){
        ret++;
    }
    return ret;
}

int main(void)
{
    char tebak[128];
	int i;
    int p = 1000;
    int cek = 1;
    int secret[] = {954,
                    952,
                    943,
                    952,
                    1107,
                    1088,
                    1100,
                    1101,
                    1117,
                    1118,
                    1098,
                    1090,
                    1097,
                    1061,
                    1072,
                    1082,
                    1068,
                    1076,
                    1065,
                    1036,
                    1051,
                    1056,
                    1253,
                    1258,
                    1277,
                    1218,
                    1218,
                    1218,
                    1220,
                    1250,
                    1205,
                    1198,
                    1193,
                    1198,
                    1214,
                    1214,
                    1183,
                    1180,
                    1175,
                    1398,
                    1366,
                    1386,
                    1377,
                    1396,
                    1352,
                    1378,
                    1350,
                    1351,
                    1352,
                    1294,
                    1340,
                    1320,
                    1289,
                    1302,
                    1514,
                    1530,
                    1528,
                    1524,
                    1527,
                    1472,
                    1487,
                    1485,
                    1428,
                    1478,
                    1420,
                    1447,
                    1529,
                    1446,
                    1440,
                    1505,
                    1513,
                    1492,
                    1426,
                    1416,
                    1658};

	printf("Selamat datang \n");
    printf("Silakan tebak flag:\n");
    scanf("%s", tebak);

	for (i=0; i < strlen(tebak); i++) {
		p = next_prime(p);
        if((p^(int)tebak[i]) != secret[i]){
            cek = 0;
        }
	}
	if(cek == 1){
        printf("\nSelamat lur.\n");
        printf("%s\n", tebak);
    }
    else{
        printf("\nCoba lagi gan.\n");
    }
	return 0;
}