<?php

namespace RevoTale\CheckboxUA\Exception;

use RuntimeException;

final class UnexpectedStatusCodeException extends RuntimeException implements ClientException
{
    public function __construct($status, $message = '')
    {
        parent::__construct($message, $status);
    }
}
