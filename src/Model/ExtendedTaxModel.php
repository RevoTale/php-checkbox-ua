<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ExtendedTaxModel extends ArrayObject
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
     * @var float
     */
    protected $decimalRate;
    /**
     * @var float
     */
    protected $decimalExtraRate;

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

    public function getDecimalRate(): float
    {
        return $this->decimalRate;
    }

    public function setDecimalRate(float $decimalRate): self
    {
        $this->initialized['decimalRate'] = true;
        $this->decimalRate = $decimalRate;

        return $this;
    }

    public function getDecimalExtraRate(): float
    {
        return $this->decimalExtraRate;
    }

    public function setDecimalExtraRate(float $decimalExtraRate): self
    {
        $this->initialized['decimalExtraRate'] = true;
        $this->decimalExtraRate = $decimalExtraRate;

        return $this;
    }
}
