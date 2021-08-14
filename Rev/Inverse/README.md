# Description
-----------------
Sederhana kok, tinggal buat fungsi inversenya

# Points
-----------------
200

# Flag
-----------------
KMTETICTF{substitute_and_XOR_r329fuin32klaa__}

# Solver
-----------------
```
permutation = [None] * len(arr)

for i, p in enumerate(arr):
  permutation[p] = int(i)

permutation

solutions = [None] * len(arr)

for i, p in enumerate(permutation):
  solutions[p] = chr(i^permutation[i]^out[i])

"".join(solutions)
```