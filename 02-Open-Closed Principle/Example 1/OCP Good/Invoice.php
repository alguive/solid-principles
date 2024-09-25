<?php

class Invoice
{
    protected string $number;

    public function __construct(string $invoice)
    {
        $this->number = $invoice;
    }

}
