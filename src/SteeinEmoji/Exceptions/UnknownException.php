<?php
namespace SteeinEmoji\Exceptions;

use Exception;

class UnknownException extends Exception
{
    public static function create($character) : UnknownException
    {
        return new static("Символ `{$character}` не существует");
    }
}