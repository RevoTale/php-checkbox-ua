<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CurrencyExchangeSchema extends ArrayObject
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
     * @var CurrencySchema
     */
    protected $sell;
    /**
     * @var CurrencySchema
     */
    protected $buy;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $reversal = false;
    /**
     * @var string
     */
    protected $clientInfo;
    /**
     * @var float
     */
    protected $commission;
    /**
     * @var float
     */
    protected $cross;

    public function getSell(): CurrencySchema
    {
        return $this->sell;
    }

    public function setSell(CurrencySchema $sell): self
    {
        $this->initialized['sell'] = true;
        $this->sell = $sell;

        return $this;
    }

    public function getBuy(): CurrencySchema
    {
        return $this->buy;
    }

    public function setBuy(CurrencySchema $buy): self
    {
        $this->initialized['buy'] = true;
        $this->buy = $buy;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * An enumeration.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getReversal(): bool
    {
        return $this->reversal;
    }

    public function setReversal(bool $reversal): self
    {
        $this->initialized['reversal'] = true;
        $this->reversal = $reversal;

        return $this;
    }

    public function getClientInfo(): string
    {
        return $this->clientInfo;
    }

    public function setClientInfo(string $clientInfo): self
    {
        $this->initialized['clientInfo'] = true;
        $this->clientInfo = $clientInfo;

        return $this;
    }

    public function getCommission(): float
    {
        return $this->commission;
    }

    public function setCommission(float $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

        return $this;
    }

    public function getCross(): float
    {
        return $this->cross;
    }

    public function setCross(float $cross): self
    {
        $this->initialized['cross'] = true;
        $this->cross = $cross;

        return $this;
    }
}
