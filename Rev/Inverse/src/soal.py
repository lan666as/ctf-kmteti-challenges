from secret import FLAG

permutation = [ 7, 37, 21, 17, 25, 33, 38, 14, 32, 23, 22, 39, 12, 45, 31, 43, 16, 18, 3, 36, 27,  2, 11, 35,  1, 24, 28, 29, 13,  8,  5,  9, 44,  6, 4, 19, 15, 41,  0, 10, 34, 20, 26, 42, 30, 40]

out = [None] * len(permutation)

for i,p in enumerate(permutation):
  out[p] = (i^p^ord(FLAG[i]))

print(f"out = {out}")