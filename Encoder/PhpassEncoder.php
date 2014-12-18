<?php

namespace Zebba\Bundle\SecurityBundle\Encoder;

use Hautelook\Phpass\PasswordHash;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class PhpassEncoder implements PasswordEncoderInterface
{
    public function encodePassword($raw, $salt)
    {
        $hasher = new PasswordHash(8, false);

        return $hasher->hashPassword($raw);
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        $hasher = new PasswordHash(8, false);

        return $hasher->CheckPassword($raw, $encoded);
    }
}