<?php
namespace Advancedideasmechanics\Uniqueidgenerator;

class UniqueidService implements UniqueidServiceInterface
{
    public function getId($length) {

        $length = isset($length) && (int)$length > 16 ? $length : 16;
        $opensslRandom = openssl_random_pseudo_bytes($length, $cryptoStrong);
        if (false === $cryptoStrong || false === $opensslRandom) {
            throw new \RuntimeException('IV generation failed');
        }

        return bin2hex($opensslRandom);
    }

}