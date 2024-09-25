<?php

class DatabasePersistence implements InvoicePersistenceInterface
{
    public function save(Invoice $invoice): void
    {
        echo \sprintf('Save Invoice on Database');
    }
}
