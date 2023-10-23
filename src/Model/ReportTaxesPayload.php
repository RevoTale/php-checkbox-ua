<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ReportTaxesPayload extends ArrayObject
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
    protected $extraRate;
    /**
     * @var float
     */
    protected $sellSum;
    /**
     * @var float
     */
    protected $returnSum;
    /**
     * @var float
     */
    protected $salesTurnover;
    /**
     * @var float
     */
    protected $returnsTurnover;
    /**
     * @var DateTime
     */
    protected $setupDate;
    /**
     * @var bool
     */
    protected $included = true;
    /**
     * @var bool
     */
    protected $noVat;
    /**
     * @var string
     */
    protected $advancedCode;

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

    public function getSellSum(): float
    {
        return $this->sellSum;
    }

    public function setSellSum(float $sellSum): self
    {
        $this->initialized['sellSum'] = true;
        $this->sellSum = $sellSum;

        return $this;
    }

    public function getReturnSum(): float
    {
        return $this->returnSum;
    }

    public function setReturnSum(float $returnSum): self
    {
        $this->initialized['returnSum'] = true;
        $this->returnSum = $returnSum;

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

    public function getSetupDate(): DateTime
    {
        return $this->setupDate;
    }

    public function setSetupDate(DateTime $setupDate): self
    {
        $this->initialized['setupDate'] = true;
        $this->setupDate = $setupDate;

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

    public function getAdvancedCode(): ?string
    {
        return $this->advancedCode;
    }

    public function setAdvancedCode(?string $advancedCode): self
    {
        $this->initialized['advancedCode'] = true;
        $this->advancedCode = $advancedCode;

        return $this;
    }
}
