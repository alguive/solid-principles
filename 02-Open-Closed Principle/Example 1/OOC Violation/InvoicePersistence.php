<?php

/**
 * We should be able to add new functionality without touching the existing code for the class.
 * This is because whenever we modify the existing code, we are taking the risk of creating potential bugs.
 * So we should avoid touching the tested and reliable (mostly) production code if possible.
 */
class InvoicePersistence
{
    protected Invoice $invoice;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function saveToFile(string $filename)
    {
        // Code to create the file with the given name and save the content init.
    }

    public function saveToDatabase()
    {
        // Save invoice on the database.
    }
}