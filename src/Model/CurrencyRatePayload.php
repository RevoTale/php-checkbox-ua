<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CurrencyRatePayload extends ArrayObject
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
    protected $code;
    /**
     * @var string
     */
    protected $symbolCode;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $sell;
    /**
     * @var float
     */
    protected $buy;
    /**
     * @var float
     */
    protected $regulator;
    /**
     * @var DateTime
     */
    protected $createdAt;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getSymbolCode(): string
    {
        return $this->symbolCode;
    }

    public function setSymbolCode(string $symbolCode): self
    {
        $this->initialized['symbolCode'] = true;
        $this->symbolCode = $symbolCode;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSell(): float
    {
        return $this->sell;
    }

    public function setSell(float $sell): self
    {
        $this->initialized['sell'] = true;
        $this->sell = $sell;

        return $this;
    }

    public function getBuy(): float
    {
        return $this->buy;
    }

    public function setBuy(float $buy): self
    {
        $this->initialized['buy'] = true;
        $this->buy = $buy;

        return $this;
    }

    public function getRegulator(): float
    {
        return $this->regulator;
    }

    public function setRegulator(float $regulator): self
    {
        $this->initialized['regulator'] = true;
        $this->regulator = $regulator;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }
}
