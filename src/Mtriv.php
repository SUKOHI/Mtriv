<?php namespace Sukohi\Mtriv;

class Mtriv {

	private $_secret_key = 'sIMple_VErIFy_COde_Key';
	
	public function secretKey($key){
	
		if(!empty($key)){
			
			$this->_secret_key = $key;
			
		}
		
		return $this;
		
	}

	public function publicKey($str, $expiration = 0){
	
		$key_parts = [$str, $this->_secret_key, $expiration];
		return md5(implode('-', $key_parts));
	
	}
	
	public function check($str, $public_key, $expiration = 0){
	
		if(!empty($str) && $this->publicKey($str, $expiration) == $public_key){

			return !($expiration > 0 && $expiration < time());

		}

		return false;
	
	}

}