<?php
include("flag.php");
session_start();

$state= $_SESSION["state"];
$m = $_SESSION["m"];
$c = $_SESSION["c"];
$a = $_SESSION["a"];

if(!isset($_GET["tebak"])){
    show_source(__FILE__);
}
else {
    if(($_GET["tebak"] == ($state*$a+$c)%$m) && (time() - $_SESSION["start_time"] <= 2)){
        echo "Selamat lur : " . $flag;
    }
    else{
        echo "Coba lagi gan";
    }
}
?>