<?php

class Modelo_PN extends CI_Model{

	function encryp()
	{
		define('AES_256_CBC', 'aes-256-cbc');
		$encryption_key = openssl_random_pseudo_bytes(32);
		$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));
		$data = "Encrypt me, please!";
		echo "Before encryption: $data<br>";
		$encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv);
		echo "Encrypted: $encrypted<br>";
		$encrypted = $encrypted . ':' . base64_encode($iv);
		$parts = explode(':', $encrypted);
		$decrypted = openssl_decrypt($parts[0], AES_256_CBC, $encryption_key, 0, base64_decode($parts[1]));
		echo "Decrypted: $decrypted<br>";
	}
}
