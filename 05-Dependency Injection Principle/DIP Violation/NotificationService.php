<?php

/**
 * The DIP states that:
 *      1.	High-level modules should not depend on low-level modules.
 *          Both should depend on abstractions (interfaces or abstract classes).
 *      2.	Abstractions should not depend on details.
 *          Details (concrete implementations) should depend on abstractions.
 */

class EmailNotification
{
    public function sendEmail(string $message): void
    {
        echo \sprinf('Sending email notification: %s', $message);
    }
}

class SMSNotification
{
    public function sendSMS(string $message): void
    {
        echo \sprintf('Sending SMS notification: %s', $message);
    }
}

class NotificationService
{
    public function __construct(
        protected SMSNotification $smsNotification,
        protected EmailNotification $emailNotification
    ) {
    }

    public function sendEmailNotification(string $message): void
    {
        $this->emailNotification->sendEmail($message);
    }

    public function sendSMSNotification(string $message): void
    {
        $this->smsNotification->sendSMS($message);
    }
}
