<?php

class UseCase
{
    protected Invoice $invoice;

    public function execute()
    {
        $this->invoice = new Invoice('INV-123');

        $this->saveToFile();
        $this->saveToDatabase();
    }

    protected function saveToDatabase(): void
    {
        $databasePersistence = new DatabasePersistence();
        $persistenceManager = new PersistenceManager($databasePersistence);

        $persistenceManager->saveInvoice($this->invoice);
    }

    protected function saveToFIle(): void
    {
        $filePersistence = new FilePersistence();
        $persistenceManager = new PersistenceManager($filePersistence);

        $persistenceManager->saveInvoice($this->invoice);
    }
}
