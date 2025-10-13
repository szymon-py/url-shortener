<?php

namespace App\Models;

class UrlModel
{
    public function generateShortCode(int $length = 6): string {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $shortCode = '';
        for ($i = 0; $i <$length; $i++) {
            $shortCode .= $characters[random_int(0,$charactersLength - 1)];
        }
        return $shortCode;
    }
}