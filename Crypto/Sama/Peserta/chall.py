from Crypto.Util.number import getPrime, bytes_to_long
from secrets import FLAG, e

m = bytes_to_long(FLAG)

for i in range(1,e+1):
    p = getPrime(512)
    q = getPrime(512)

    N = p*q

    print(f"n_{i} = {N}, c_{i} = {pow(m, e, N)}")