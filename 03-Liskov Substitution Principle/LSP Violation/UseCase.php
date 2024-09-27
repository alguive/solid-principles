<?php

class UseCase
{
    public function execute()
    {
        $rectangle = new Rectangle();
        $rectangle->setWidth(5);
        $rectangle->setHeight(10);

        $square = new Square();
        $square->setWidth(5);
        $square->setHeight(10);

        echo \sprintf('%s', $rectangle->getArea());
        echo \sprintf('%s', $square->getArea());
    }
}
