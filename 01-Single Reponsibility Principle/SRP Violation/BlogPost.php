<?php

/**
 * A class should have one, and only one, reason to change.
 */
class BlogPost
{
    protected string $title;
    protected Author $author;
    protected string $content;
    protected \DateTime $date;

    public function getData(): array
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author->fullName(),
            'timestamp' => $this->date->getTimestamp(),
        ];
    }

    public function printJson(): string
    {
        return json_encode($this->getData();
    }

    public function printHtml(): string
    {
        return `My HTML content`;
    }
}