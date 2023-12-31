<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ShiftTaxModel extends ArrayObject
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
     * @var int
     */
    protected $rate;
    /**
     * @var int
     */
    protected $extraRate;
    /**
     * @var bool
     */
    protected $included;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var bool
     */
    protected $noVat;
    /**
     * @var string
     */
    protected $advancedCode;
    /**
     * @var int
     */
    protected $sales;
    /**
     * @var int
     */
    protected $returns;
    /**
     * @var int
     */
    protected $salesTurnover;
    /**
     * @var int
     */
    protected $returnsTurnover;

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

    public function getRate(): int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

        return $this;
    }

    public function getExtraRate(): ?int
    {
        return $this->extraRate;
    }

    public function setExtraRate(?int $extraRate): self
    {
        $this->initialized['extraRate'] = true;
        $this->extraRate = $extraRate;

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

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

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

    public function getSales(): int
    {
        return $this->sales;
    }

    public function setSales(int $sales): self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;

        return $this;
    }

    public function getReturns(): int
    {
        return $this->returns;
    }

    public function setReturns(int $returns): self
    {
        $this->initialized['returns'] = true;
        $this->returns = $returns;

        return $this;
    }

    public function getSalesTurnover(): int
    {
        return $this->salesTurnover;
    }

    public function setSalesTurnover(int $salesTurnover): self
    {
        $this->initialized['salesTurnover'] = true;
        $this->salesTurnover = $salesTurnover;

        return $this;
    }

    public function getReturnsTurnover(): int
    {
        return $this->returnsTurnover;
    }

    public function setReturnsTurnover(int $returnsTurnover): self
    {
        $this->initialized['returnsTurnover'] = true;
        $this->returnsTurnover = $returnsTurnover;

        return $this;
    }
}
