<?php

class MultiFunctionPrinter implements PrintInterface, ScanInterface, FaxInterface
{
    public function printDocument(string $document): void
    {
        echo \sprintf('Printing document: %s', $document);
    }

    public function scanDocument(string $document): void
    {
        echo \sprintf('Scanning document: %s', $document);
    }

    public function faxDocument(string $document): void
    {
        echo \sprintf('Faxing document: %s', $document);
    }
}
