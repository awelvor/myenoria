<?php

namespace App\Formatter;

class TextFormatter implements FormatterInterface
{
   public function format(string $message): string
    {
        return wordwrap($message, 70);
    }
}