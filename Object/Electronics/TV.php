<?php

namespace object\electronics;

class TV {
  public string $model;
  public int $size;
  public static string $status = 'выключен';

  public function __construct(string $model, int $size) {
    $this->model = $model;
    $this->size = $size;
  }

  public static function on(): void {
    self::$status = 'включен';
  }

  public static function off(): void {
    self::$status = 'выключен';
  }
}
