<?php
session_start();

$a = gmp_nextprime(rand(10000000, 100000000));
$c = rand(10000000, 100000000);
$m = gmp_nextprime(rand(1000000, 10000000));
$seed = rand(10000000, 100000000);
$state = $seed;

for ($_ = 0; $_ <= 32; $_++) {
	$state = ($state*$a+$c)%$m;
	echo "$state, ";
}

$_SESSION["state"] = $state;
$_SESSION["m"] = $m;
$_SESSION["c"] = $c;
$_SESSION["a"] = $a;
$_SESSION["start_time"] = time();

?>
<form action="/cek.php">
  <label for="tebak">Tebak angka:</label> <br>
  <input type="number" id="tebak" name="tebak" value=""><br>
</form> 


