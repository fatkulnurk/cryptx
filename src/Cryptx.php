<?php

namespace Fatkulnurk\Cryptx;

use Dcrypt\OneTimePad;
use Dcrypt\OpensslStack;
use Dcrypt\OpensslStatic;

class Cryptx
{
    public static function encrypt(string $value, string $key, $cipher = '', $algo = '')
    {
        if (!empty($cipher) && empty(!$algo)) {
            return OpensslStatic::encrypt($value, $key, $cipher, $algo);
        }

        $stack = self::stack($key);

        return $stack->encrypt('a secret');
    }

    public static function decode(string $encrypted, string $key, $cipher = '', $algo = '')
    {
        if (!empty($cipher) && empty(!$algo)) {
            return OpensslStatic::decrypt($encrypted, $key, $cipher, $algo);
        }

        $stack = self::stack($key);

        return $stack->decrypt($encrypted);
    }

    public static function stack(string $key): OpensslStack
    {
        return (new OpensslStack($key))
            ->add('aes-256-ecb', 'snefru')
            ->add('aes-256-ofb', 'sha224')
            ->add('aes-256-cbc', 'sha256')
            ->add('aes-256-ctr', 'sha384')
            ->add('aes-256-gcm', 'sha512');
    }

    public static function oneTimePad(string $encrypted,string $key, $pool = false, $customPool = "whirlpool")
    {
        if ($pool) {
            return OneTimePad::crypt($encrypted, $key, $customPool);
        }

        return OneTimePad::crypt($encrypted, $key);
    }
}