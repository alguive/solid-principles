<?php

class Square implements CalculableAreaInterface
{
    public function __construct(
        protected int $edge
    ) {
        // Empty constructor
    }

    public function calculateArea()
    {
        return $this->edge * 2;
    }
}
