<?php

namespace App\StategyPattern;

interface BmiInterface
{
    public function getBMI(string $weight, string $height): float;
    public function getResult(float $bmi) : string;
}
