<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class BalanceModel extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int
     */
    protected $initial;
    /**
     * @var int
     */
    protected $balance;
    /**
     * @var int
     */
    protected $cashSales;
    /**
     * @var int
     */
    protected $cardSales;
    /**
     * @var int
     */
    protected $discountsSum;
    /**
     * @var int
     */
    protected $extraChargeSum;
    /**
     * @var int
     */
    protected $cashReturns;
    /**
     * @var int
     */
    protected $cardReturns;
    /**
     * @var int
     */
    protected $serviceIn;
    /**
     * @var int
     */
    protected $serviceOut;
    /**
     * @var DateTime
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getInitial(): int
    {
        return $this->initial;
    }

    public function setInitial(int $initial): self
    {
        $this->initialized['initial'] = true;
        $this->initial = $initial;

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

    public function getCashSales(): int
    {
        return $this->cashSales;
    }

    public function setCashSales(int $cashSales): self
    {
        $this->initialized['cashSales'] = true;
        $this->cashSales = $cashSales;

        return $this;
    }

    public function getCardSales(): int
    {
        return $this->cardSales;
    }

    public function setCardSales(int $cardSales): self
    {
        $this->initialized['cardSales'] = true;
        $this->cardSales = $cardSales;

        return $this;
    }

    public function getDiscountsSum(): ?int
    {
        return $this->discountsSum;
    }

    public function setDiscountsSum(?int $discountsSum): self
    {
        $this->initialized['discountsSum'] = true;
        $this->discountsSum = $discountsSum;

        return $this;
    }

    public function getExtraChargeSum(): ?int
    {
        return $this->extraChargeSum;
    }

    public function setExtraChargeSum(?int $extraChargeSum): self// Manually fixed nullability
    {
        $this->initialized['extraChargeSum'] = true;
        $this->extraChargeSum = $extraChargeSum;

        return $this;
    }

    public function getCashReturns(): int
    {
        return $this->cashReturns;
    }

    public function setCashReturns(int $cashReturns): self
    {
        $this->initialized['cashReturns'] = true;
        $this->cashReturns = $cashReturns;

        return $this;
    }

    public function getCardReturns(): int
    {
        return $this->cardReturns;
    }

    public function setCardReturns(int $cardReturns): self
    {
        $this->initialized['cardReturns'] = true;
        $this->cardReturns = $cardReturns;

        return $this;
    }

    public function getServiceIn(): int
    {
        return $this->serviceIn;
    }

    public function setServiceIn(int $serviceIn): self
    {
        $this->initialized['serviceIn'] = true;
        $this->serviceIn = $serviceIn;

        return $this;
    }

    public function getServiceOut(): int
    {
        return $this->serviceOut;
    }

    public function setServiceOut(int $serviceOut): self
    {
        $this->initialized['serviceOut'] = true;
        $this->serviceOut = $serviceOut;

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
}
