<?php
// src/Formatter/FormatterInterface.php
namespace App\Formatter;

interface FormatterInterface
{
    public function format(string $message): string;
}