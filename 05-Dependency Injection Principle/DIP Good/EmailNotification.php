<?php

class EmailNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo \sprintf('Sending email notification: %s', $message);
    }
}
