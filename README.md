Mtriv
=====

A PHP package mainly developed for Laravel to verify simply.  
(This is for Laravel 4.2. [For Laravel 5](https://github.com/SUKOHI/Mtriv))

Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/mtriv": "1.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        'Sukohi\Mtriv\MtrivServiceProvider',
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'Mtriv' => 'Sukohi\Mtriv\Facades\Mtriv',
    ]

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
        
License
====

This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh