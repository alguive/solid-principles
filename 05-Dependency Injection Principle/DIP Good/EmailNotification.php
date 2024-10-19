<?php

class EmailNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo \sprinf('Sending email notification: %s', $message);
    }
}
