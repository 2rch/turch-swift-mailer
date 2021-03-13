<?php declare(strict_types=1);

namespace App;

class MailTransport implements TransportInterface
{
    /**
     * @var \Swift_SmtpTransport
     */
    private $transport;

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    public function __construct(string $host, int $port, string $user, string $password, string $encryption = null)
    {
        $this->transport = (new \Swift_SmtpTransport($host, $port, $encryption))
            ->setUsername($user)
            ->setPassword($password);
        $this->mailer = new \Swift_Mailer($this->transport);
    }

    public function send(Message $message): bool
    {
        return $this->mailer->send(
            (new \Swift_Message($message->getTitle()))
            ->setFrom(['example@example.com' => 'Mr. Example'])
            ->setTo($message->getEmail())
            ->setBody($message->getBody())
        ) !== 0;
    }

}