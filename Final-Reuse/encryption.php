<!--
    Simple encryption/decryption class
-->

<?php
    if(!defined('DirectAccess')) {
        die('You cannot access this page directly.');
    }

    class EncryptDecrypt {
        function encrypt($string){
            return openssl_encrypt($string,"AES-128-ECB", $GLOBALS['ENCRYPTION_KEY']);
        }
        function decrypt($string){
            return openssl_decrypt($string,"AES-128-ECB", $GLOBALS['ENCRYPTION_KEY']);
        }

        // Name abbreviation.
        // John Doe -> J. Doe
        function abbreviateName($name){
            $name = $this->decrypt($name);
            return $name;
            $name_array = explode(' ', $name);
            $name_array[0] = mb_substr($name_array[0], 0, 1) . ".";
            $name = implode(" ",$name_array);
            return $name;
        }
    }
?>