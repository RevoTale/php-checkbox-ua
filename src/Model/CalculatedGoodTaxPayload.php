<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CalculatedGoodTaxPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int
     */
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $symbol;
    /**
     * @var float
     */
    protected $rate;
    /**
     * @var float
     */
    protected $value;
    /**
     * @var float
     */
    protected $extraRate;
    /**
     * @var float
     */
    protected $extraValue;
    /**
     * @var bool
     */
    protected $included;
    /**
     * @var DateTime
     */
    protected $createdAt;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->initialized['symbol'] = true;
        $this->symbol = $symbol;

        return $this;
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

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

    public function getExtraRate(): ?float
    {
        return $this->extraRate;
    }

    public function setExtraRate(?float $extraRate): self
    {
        $this->initialized['extraRate'] = true;
        $this->extraRate = $extraRate;

        return $this;
    }

    public function getExtraValue(): float
    {
        return $this->extraValue;
    }

    public function setExtraValue(float $extraValue): self
    {
        $this->initialized['extraValue'] = true;
        $this->extraValue = $extraValue;

        return $this;
    }

    public function getIncluded(): bool
    {
        return $this->included;
    }

    public function setIncluded(bool $included): self
    {
        $this->initialized['included'] = true;
        $this->included = $included;

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
