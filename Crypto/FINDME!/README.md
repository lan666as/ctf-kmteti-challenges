# Description
-----------------
Temukan aku

# Points
-----------------
200

# Flag
-----------------
KMTETICTF{NEWT_SCAMAWDER}

# Solver
-----------------
Menggabungkan huruf pertama nama tiap kota
```
import requests, re

flag = "KMTETICTF{(40.749143, -73.984976)(44.048582, -123.104065)(30.593680, 114.305713)(35.711088, 51.390465)_(22.562340, 114.005794)(41.781898, -87.670420)(33.740648, -84.382676)(55.752333, 37.620060)(31.200692, 29.913213)(52.228565, 21.013322)(23.808972, 90.411718)(0.971507, -79.637898)(37.523761, -77.446774)}"

def get_letter_from_coordinate(match):
    lat = match.group(1)
    long = match.group(2)
    r = requests.get("https://geocode.xyz/{},{}?json=1".format(lat, long))
    j = r.json()
    return j["geocode"][0]

print(re.sub(r'\(([\d\.-]+), ([\d\.-]+)\)', get_letter_from_coordinate, flag))
```
