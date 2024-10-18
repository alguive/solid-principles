<?php

class BasicPrinter implements PrintInterface
{
    public function printDocument(string $document): void
    {
        echo \sprintf('Printing document: %s', $document);
    }
}
