# Description
-----------------
Flag ada di file .zip

# Points
-----------------
250

# Flag
-----------------
KMTETICTF{L0T5_0F_Z1P_4RCH1V35}

# Solver
-----------------
```
#!/bin/bash

for ((i = 1000; i > 0; i--)); do
    if [ ! -f "$i.zip" ]; then
        break
    fi
    unzip $i.zip
    rm $i.zip
done
```
