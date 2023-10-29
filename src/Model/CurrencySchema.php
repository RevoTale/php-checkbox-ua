<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CurrencySchema extends ArrayObject
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
    protected $currency;
    /**
     * @var float
     */
    protected $value;
    /**
     * @var CurrencyRateModel
     */
    protected $rate;

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    public function getRate(): CurrencyRateModel
    {
        return $this->rate;
    }

    public function setRate(CurrencyRateModel $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

        return $this;
    }
}
