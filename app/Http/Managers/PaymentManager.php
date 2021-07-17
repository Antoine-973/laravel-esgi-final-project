<?php

namespace App\Http\Managers;

class PaymentManager {
    public function getSellerPart($total)
    {
        $percent = 70;
        $percentDeci = $percent / 100;
        $part = $percentDeci * $total;
        return $part;
    }

    public function getPokebayPart($total)
    {
        $percent = 30;
        $percentDeci = $percent / 100;
        $part = $percentDeci * $total;
        return $part;
    }
}