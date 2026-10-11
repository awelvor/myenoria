<?php
namespace App\Service;

use App\Formatter\TextFormatter;

class MessageGenerator
{
    public function __construct(
        private TextFormatter $formatter,
    ) {
    }

    public function getHappyMessage(): string
    {
        $messages = ["Lorem ipsum ..."];

        return $this->formatter->format($messages[array_rand($messages)]);
    }
}