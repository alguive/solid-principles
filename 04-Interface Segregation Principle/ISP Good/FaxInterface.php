<?php

interface FaxInterface
{
    public function scanDocument(string $document): void;
}
