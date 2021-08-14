<?php
include('flag.php');
$secret_string = "KMTETI-Cd7vDTdk7rUqt9Fj";
$secret_hash = md5($secret_string);

if (!(isset($_GET['password']))) {
    show_source(__FILE__);
}
else {
    if ((substr($_GET['password'], 0, 6) != substr($secret_string, 0, 6)) || ($secret_string === $_GET['password'])) {
        die('Coba lagi lur.');
    }

    $hash = md5($_GET['password']);
    if(substr($hash, 0, 16) == substr($secret_hash, 0, 16)) {
        print $flag;
    } else {
        print "KMTETICTF{coba_lagi_lur}";
    }
}

?>