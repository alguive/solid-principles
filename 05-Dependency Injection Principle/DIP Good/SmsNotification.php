<?php

class SmsNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo \sprintf('Sending SMS notification: %s', $message);
    }
}
