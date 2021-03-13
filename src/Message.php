<?php declare(strict_types=1);

namespace App;

class Message
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $email;

    public function __construct(string $title, string $body, string $email)
    {
        $this->title = $title;
        $this->body = $body;
        $this->email = $email;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getBody()
    {
        return $this->body;
    }

}