<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class SetupRatesPayload extends ArrayObject
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
     * @var CurrencyRatePayload[]
     */
    protected $rates;

    /**
     * @return CurrencyRatePayload[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }

    /**
     * @param CurrencyRatePayload[] $rates
     */
    public function setRates(array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;

        return $this;
    }
}
