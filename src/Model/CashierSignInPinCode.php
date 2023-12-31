<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CashierSignInPinCode extends ArrayObject
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
    protected $pinCode;

    public function getPinCode(): string
    {
        return $this->pinCode;
    }

    public function setPinCode(string $pinCode): self
    {
        $this->initialized['pinCode'] = true;
        $this->pinCode = $pinCode;

        return $this;
    }
}
