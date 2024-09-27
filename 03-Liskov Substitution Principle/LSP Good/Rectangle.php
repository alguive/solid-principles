<?php

class Rectangle implements CalculableAreaInterface
{
    public function __construct(
        protected int $width,
        protected int $height
    ) {
        // Empty constructor
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
