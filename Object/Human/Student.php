<?php

namespace object\human;

class Student {
  public int $age;
  public string $name;
  public string $surname;

  public function __construct(int $age, string $name, string $surname) {
    $this->age = $age;
    $this->name = $name;
    $this->surname = $surname;
  }

  public function setAge(int $age): void {
    if ($age > 0) {
      $this->age = $age;
    }
  }

  public function getAge(): int {
    return $this->age;
  }
}
