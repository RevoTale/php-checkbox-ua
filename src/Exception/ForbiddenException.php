<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Exception;

use RuntimeException;

class ForbiddenException extends RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}
