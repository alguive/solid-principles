<?php

class Square extends Rectangle
{
    public function setWidth(int $width)
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight(int $height)
    {
        $this->width = $height;
        $this->height = $height;
    }
}
