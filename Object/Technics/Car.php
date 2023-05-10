<?php

namespace object\technics;

class Car {
  public int $maxFuel;
  public int $fuel = 0;
  public string $model;
  public string $bodyType;

  public function __construct(string $model, string $bodyType, int $fuel, int $maxFuel) {
    $this->model = $model;
    $this->bodyType = $bodyType;
    $this->fuel = $fuel;
    $this->maxFuel = $maxFuel;
  }

  public function reFuel(int $count): void {
    if ($count > 0) {
      $this->fuel += $count;
    }
    if ($this->fuel > $this->maxFuel) {
      $this->fuel = $this->maxFuel;
    }
  }

  public function getStatusFuel(): string {
    $status = '';

    if ($this->fuel === 0) {
      $status = '0%';
    } elseif ($this->fuel === $this->maxFuel) {
      $status = '100%';
    } else {
      $status = round((100 * $this->fuel / $this->maxFuel), 2) . '%';
    }
    return $status;
  }
}
