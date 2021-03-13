<?php declare(strict_types=1);

require_once 'vendor/autoload.php';
$config = require_once './src/config.php';

//You can write your email and password in src/config.php
//make sure you enabled untrusted apps access in your security settings

$mailTransport = new \App\MailTransport(
    $config['host'],
    $config['port'],
    $config['user'],
    $config['password'],
    $config['encryption']
);

$mailTransport->send(new \App\Message('It\'s title', 'It\'s a body', 'alexturch97@gmail.com'));
