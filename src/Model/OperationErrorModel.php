<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class OperationErrorModel extends ArrayObject
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
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $address;

    public function getError(): string
    {
        return $this->error;
    }

    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
