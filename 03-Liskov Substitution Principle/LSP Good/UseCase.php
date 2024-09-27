<?php

class UseCase
{
    public function execute()
    {
        $square = new Square(2);
        echo $square->calculateArea();

        $rectangle = new Rectangle(2, 5);
        echo $rectangle->calculateArea();
    }
}
