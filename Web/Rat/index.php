<?php
    include('flag.php');
	$rat = $_GET['secret'];
	
    print '<h1>Mungkinkah ini bukan angka?</h1>';

	if (!(isset($rat))) {
        show_source(__FILE__);
    }
    else {
		if (is_numeric($rat)){
			if (!strpos($rat, ".")){
				if (strlen($rat) > 10){
					if ( $rat > 500000000 && $rat < 599999999)
						echo 'Flag:  '.$flag;
					else
						print '<h1>Coba Lagi</h1>';
				} else
					print '<h5>WHOOPS, KURANG TEPAT</h5>';
			} else
				print '<h5>Jangan menyerah, coba lagi</h5>';	
		} else
			print '</h5>Cek kembali sourcenya :)</h5>';
	}
?>
