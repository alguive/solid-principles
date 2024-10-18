<?php

/**
 * The rule is: “No client should be forced to depend on methods it does not use”.
 * The user of the interface should not be forced to rely on methods he does not use.
 * We should not use “fat interfaces” that declare multiple methods if any of them could be left unused.
 * Better to have a few dedicated small interfaces than one that is too general.
 * It is also in line with the single responsibility principle.
 */

interface Printer
{
    public function printDocument(string $document): void;
    public function scanDocument(string $document): void;
    public function faxDocument(string $document): void;
}


class BasicPrinter implements Printer
{
    public function printDocument(string $document): void
    {
        echo \sprintf('Printing document: %s', $document);
    }

    public function scanDocument(string $document): void
    {
        throw new Exception('Basic printer cannot scan');
    }

    public function faxDocument(string $document): void
    {
        throw new Exception('Basic printer cannot fax');
    }
}


class MultiFunctionPrinter implements Printer
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
