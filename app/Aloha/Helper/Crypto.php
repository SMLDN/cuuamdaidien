<?php
namespace Aloha\Helper;

class Crypto
{
    public static function encrypt($value)
    {
        $passphrase = self::generatePassphrase();
        $salt = openssl_random_pseudo_bytes(8);
        $salted = '';
        $dx = '';
        while (strlen($salted) < 48) {
            $dx = md5($dx . $passphrase . $salt, true);
            $salted .= $dx;
        }
        $key = substr($salted, 0, 32);
        $iv = substr($salted, 32, 16);
        $encrypted_data = openssl_encrypt($value, 'aes-256-cbc', $key, true, $iv);
        $data = [
            "ct" => base64_encode($encrypted_data),
            "iv" => bin2hex($iv),
            "s" => bin2hex($salt),
            "p" => $passphrase,
        ];
        return json_encode($data);
    }

    public static function generatePassphrase()
    {
        return base64_encode(openssl_random_pseudo_bytes(16));
    }
}
