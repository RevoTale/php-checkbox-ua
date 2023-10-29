<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CalculatedReceiptTaxPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $id;
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
     * @var bool
     */
    protected $noVat;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var float
     */
    protected $salesTurnover = 0;
    /**
     * @var float
     */
    protected $returnsTurnover = 0;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
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

    public function getNoVat(): bool
    {
        return $this->noVat;
    }

    public function setNoVat(bool $noVat): self
    {
        $this->initialized['noVat'] = true;
        $this->noVat = $noVat;

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

    public function getSalesTurnover(): float
    {
        return $this->salesTurnover;
    }

    public function setSalesTurnover(float $salesTurnover): self
    {
        $this->initialized['salesTurnover'] = true;
        $this->salesTurnover = $salesTurnover;

        return $this;
    }

    public function getReturnsTurnover(): float
    {
        return $this->returnsTurnover;
    }

    public function setReturnsTurnover(float $returnsTurnover): self
    {
        $this->initialized['returnsTurnover'] = true;
        $this->returnsTurnover = $returnsTurnover;

        return $this;
    }
}
