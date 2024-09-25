<?php

interface InvoicePersistenceInterface
{
    public function save(Invoice $invoice): void;
}
