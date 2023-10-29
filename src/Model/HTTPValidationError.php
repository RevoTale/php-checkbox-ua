<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class HTTPValidationError extends ArrayObject
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
     * @var ValidationError[]
     */
    protected $detail;
    /**
     * Detailed error message.
     *
     * @var string
     */
    protected $message;

    /**
     * @return ValidationError[]
     */
    public function getDetail(): array
    {
        return $this->detail;
    }

    /**
     * @param ValidationError[] $detail
     */
    public function setDetail(array $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;

        return $this;
    }

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
