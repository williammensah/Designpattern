<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFactoryModel extends Model
{
    use HasFactory;

    public static function createCar($manufacturer)
    {
        switch ($manufacturer) {
            case 'Toyota':
                return [
                    'Toyota',
                    'Color: Red',
                    'Class B',
                ];
                break;
            case 'BMW':
                return [
                    'BMW',
                    'Color: Green',
                    'Class C',
                ];
            default:
                throw new \InvalidArgumentException("Unsupported manufacturer [$manufacturer]");
                break;
        }
    }

    public static function createCarFromColor($color)
    {
        switch ($color) {
            case 'Red':
                # code...
                return static::createCar('Toyota');
                break;
            case 'Green':
                return static::createCar('BMW');
            default:
                throw new \InvalidArgumentException("Unsupported color [$color]");
                break;
        }
    }

    public static function createCarFromClass($class)
    {
        switch ($class) {
            case 'B':
                return static::createCar('Toyota');
                break;
            case 'C':
                return static::createCar('BMW');
            default:
                throw new \InvalidArgumentException("Unsupported car class 
            [$class]");
        }
    }
}
