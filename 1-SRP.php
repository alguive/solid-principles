<?php

/**
 * Single Responsibility Principle
 * Violation
 * Refactored
 */


// Violation Example
class Car {
    public function getBrand(): string
    {
        return 'Mini';
    }

    public function getModel(): string
    {
        return 'Cooper';
    }

    public function getWheelsSize(): int
    {
        return 21;
    }

    public function getFullData(): array
    {
        return [
            'brand' => $this->getBrand(),
            'model' => $this->getModel(),
            'wheel_size' => $this->getWheelsSize(),
        ];
    }

    public function jsonOutputFormat(): string
    {
        return json_encode($this->getFullData());
    }
}



// Refactored Version
class Car {
    public function getBrand(): string
    {
        return 'Mini';
    }

    public function getModel(): string
    {
        return 'Cooper';
    }

    public function getWheelsSize(): int
    {
        return 21;
    }

    public function getFullData(): array
    {
        return [
            'brand' => $this->getBrand(),
            'model' => $this->getModel(),
            'wheel_size' => $this->getWheelsSize(),
        ];
    }
}

interface OutputFormatter {
    public function format(Car $car): string;
}

class JsonFormatter implements OutputFormatter {
    public function format(Car $car): string
    {
        return json_encode($car->getFullData());
    }
}
