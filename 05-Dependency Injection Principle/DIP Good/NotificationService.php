<?php

class NotificationService
{
    protected NotificationInterface $notificationChannel;

    public function setNotificationChannel(NotificationInterface $notificationChannel): void
    {
        $this->notificationChannel = $notificationChannel;
    }

    public function sendNotification(string $message): void
    {
        $this->notificationChannel->send($message);
    }
}
