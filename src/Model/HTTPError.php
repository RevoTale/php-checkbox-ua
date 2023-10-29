<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class HTTPError extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Detailed error message.
     *
     * @var string
     */
    protected $message;

    /**
     * Detailed error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Detailed error message.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
