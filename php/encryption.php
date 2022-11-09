<?php


function encryption($key)
{

    $ciphering = "AES-128-CTR";
  
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    $encryption_iv = '200102801615200102801615';

    $encryption_key = "dineths";

    $encryption = openssl_encrypt($key, $ciphering, $encryption_key, $options, $encryption_iv);
    return $encryption;
};

function decryption($key)
{

    $ciphering = "AES-128-CTR";

    $decryption_iv = '200102801615200102801615';
    $options = 0;
   
    $decryption_key = "dineths";

    
    $decryption = openssl_decrypt(
        $key,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );

    return $decryption;
}
