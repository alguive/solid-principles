<?php

class PersistenceManager
{
    public function __construct(
        protected InvoicePersistenceInterface $invoicePersistence
    ) {
    }

    public function saveInvoice(Invoice $invoice): void
    {
        $this->invoicePersistence->save($invoice);
    }
}
