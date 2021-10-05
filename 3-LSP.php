<?php

/**
 * Liskov Substitution Principle
 * Violation
 * Refactored
 */

// Violation Principle Example
class Vehicle {
    public function startEngine(): bool
    {

    }

    public function stopEngine(): bool
    {

    }

    public function openDoor(int $doorNumber): bool
    {

    }
}

class Car extends Vehicle {
    public function openDoor(int $doorNumber): bool
    {

    }
}

class MotorBike extends Vehicle {
    public function openDoor(int $doorNumber): bool
    {
        // No doors on Motorbikes
    }
}

// Refactored Version
interface Vehicle {
    public function stopEngine(): bool;

    public function startEngine(): bool;
}

class DoorVehicle implements Vehicle {
    public function stopEngine(): bool
    {
        // TODO: Implement stopEngine() method.
    }

    public function startEngine(): bool
    {
        // TODO: Implement startEngine() method.
    }

    public function openDoor(int $doorNumber): bool
    {
        // TODO: Implement openDoor() method.
    }
}

class Car extends DoorVehicle {

}

class Truck extends DoorVehicle {

}

class Motorbike implements Vehicle {

    public function stopEngine(): bool
    {
        // TODO: Implement stopEngine() method.
    }

    public function startEngine(): bool
    {
        // TODO: Implement startEngine() method.
    }
}

