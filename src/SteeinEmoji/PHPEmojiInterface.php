<?php
namespace SteeinEmoji;

/**
 * SteeinEmoji\PHPEmojiInterface
 *
 * Частичный Интерфейс для SteeinEmoji\PHPEmoji
 */
interface PHPEmojiInterface
{
    public static function getCharacter(string $character) : string;

    public function version();
}