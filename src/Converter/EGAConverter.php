<?php

declare(strict_types=1);

namespace SeventhGreen\GolfEga\Converter;

class EGAConverter
{
    public function convert(float $hcp, float $cr, int $sr): float
    {
        return round($hcp * ($sr/113) + ($cr-72));
    }
}