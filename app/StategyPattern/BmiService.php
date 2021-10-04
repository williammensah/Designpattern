<?php

namespace App\StategyPattern;

class BmiService implements BmiInterface
{
  public function getBMI(string $weight, string $height): float
  {
    $heightInMs = $height / 100;
    return $weight / ($heightInMs * $heightInMs);
  }

  public function getResult(float $bmi): string
  {
    switch (true) {
      case  $bmi < 18.5:
        return 'You are underweight';
        break;
      case $bmi >= 18.5 && $bmi <= 24.9:
        return 'Congrats!!! You have normal weight.';
        break;
      case $bmi > 24.9 && $bmi <= 29.9:
        return 'You are overweight.';
        break;
      default:
        return "Be careful!!! You are obese.";
        break;
    }
  }
}
