<?php

class Modelo_PN extends CI_Model{

	function encryp($pass,$clave){

     $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
     $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_DEV_URANDOM );
     mcrypt_generic_init($td, $clave, $iv);
     $encrypted_data_bin = mcrypt_generic($td, $pass);
     mcrypt_generic_deinit($td);
     mcrypt_module_close($td);
     $encrypted_data_hex = bin2hex($iv).bin2hex($encrypted_data_bin);
     return $encrypted_data_hex;

	}

	function decryp($encrypted_data_hex,$clave){

			$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
			$iv_size_hex = mcrypt_enc_get_iv_size($td)*2;
			$iv = pack("H*", substr($encrypted_data_hex, 0, $iv_size_hex));
			$encrypted_data_bin = pack("H*", substr($encrypted_data_hex, $iv_size_hex));
			mcrypt_generic_init($td, $clave, $iv);
			$decrypted = mdecrypt_generic($td, $encrypted_data_bin);
			mcrypt_generic_deinit($td);
			mcrypt_module_close($td);
			return $decrypted;
			
	}
	function construct(){

	}
}
