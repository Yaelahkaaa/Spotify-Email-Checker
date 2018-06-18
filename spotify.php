<?php

$email = "gresik6etar@gmail.com"; 

$c = curl_init();
curl_setopt($c, CURLOPT_URL, 'https://www.spotify.com/id/xhr/json/isEmailAvailable.php?email=' . $email);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
$cekme = curl_exec($c);
curl_close($c);
if($cekme == "false")
{
	echo "{$email} : LIVE";
}else{
	echo "{$email} : DIE";
}
