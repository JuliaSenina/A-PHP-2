<?php

declare(strict_types=1);

require_once('autoload.php');

use Object\Human\Student as Student;
use Object\Technics\Car as Car;
use Object\Electronics\TV as TV;

$student = new Student(29, 'Анна', 'Каренина');
echo $student->name . ' студентка и ей ' . $student->getAge() . ' лет' . PHP_EOL;

echo PHP_EOL;

$auto = new Car('Лада', 'седан', 30, 300);
echo 'У нее есть автомобиль ' . $auto->model . ' и это ' . $auto->bodyType . PHP_EOL;
echo 'В баке сейчас топлива - ' . $auto->getStatusFuel() . PHP_EOL;
echo 'Заправка ...' . PHP_EOL;
$auto->reFuel(120);
echo 'В баке топлива после заправки - ' . $auto->getStatusFuel() . PHP_EOL;

echo PHP_EOL;

$technics = new TV('Xiaomi', 55);
echo 'Также у нее есть телевизор марки ' . $technics->model . ' диагональю ' . $technics->size . ' дюймов.' . PHP_EOL;
echo 'Телевизор ' . TV::$status . PHP_EOL;
TV::on();
echo 'Телевизор ' . TV::$status . PHP_EOL;