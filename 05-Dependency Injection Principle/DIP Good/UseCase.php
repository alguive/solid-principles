<?php

class UseCase
{
    public function __construct(
        protected NotificationService $notificationService
    ) {
    }

    public function sendNotification(NotificationInterface $notificationInterface, string $message)
    {
        $this->notificationService->setNotificationChannel($notificationInterface);
        $this->notificationService->sendNotification($message);
    }
}

// Use
$message = 'DIP example';
$notificationService = new NotificationService();
$useCase = new UseCase($notificationService);

$emailNotification = new EmailNotification();
$useCase->sendNotification($emailNotification, $message);

$smsNotification = new SmsNotification();
$useCase->sendNotification($smsNotification, $message);
