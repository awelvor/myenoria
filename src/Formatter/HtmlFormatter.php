<?php
// src/Formatter/HtmlFormatter.php
namespace App\Formatter;

class HtmlFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        // On retourne le message enveloppé dans une balise HTML
        return sprintf('<strong>%s</strong>', htmlspecialchars($message));
    }
}