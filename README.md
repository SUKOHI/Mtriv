Mtriv
=====

A PHP package mainly developed for Laravel to verfy simply.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Mtriv\MtrivServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Mtriv' =>'Sukohi\Mtriv\Facades\Mtriv',
    )

Usage
====

At first generate public key using secret key, string and expiration(skippable) like the following.

    $str = 'STRING, ID and so on...';
    $expiration = time(); // Skippable
    
    $public_key = Mtriv::secretKey('SECRET_KEY')->publicKey($str, $expiration);

and then you can verify.

    if(Mtriv::secretKey('SECRET_KEY')->check($str, $public_key, $expiration)) {
			
        echo 'success!';
			
    }