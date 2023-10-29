<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class OrganizationBillingSchema extends ArrayObject
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
     * @var bool
     */
    protected $canSendSms;
    /**
     * @var bool
     */
    protected $billingEnabled;
    /**
     * @var int
     */
    protected $balance = 0;

    public function getCanSendSms(): bool
    {
        return $this->canSendSms;
    }

    public function setCanSendSms(bool $canSendSms): self
    {
        $this->initialized['canSendSms'] = true;
        $this->canSendSms = $canSendSms;

        return $this;
    }

    public function getBillingEnabled(): bool
    {
        return $this->billingEnabled;
    }

    public function setBillingEnabled(bool $billingEnabled): self
    {
        $this->initialized['billingEnabled'] = true;
        $this->billingEnabled = $billingEnabled;

        return $this;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }
}
