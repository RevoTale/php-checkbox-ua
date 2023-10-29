<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class GoodItemPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Інформація про товар
     *
     * @var GoodItemPayloadGood
     */
    protected $good;
    /**
     * @var string
     */
    protected $goodId;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var bool
     */
    protected $isReturn = false;
    /**
     * @var bool
     */
    protected $isWinningsPayout;
    /**
     * @var DiscountPayload[]
     */
    protected $discounts = [];
    /**
     * Значення для розрахунку вартості товару від загальної суми.
     *
     * @var int
     */
    protected $totalSum;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Інформація про товар
     */
    public function getGood(): GoodItemPayloadGood
    {
        return $this->good;
    }

    /**
     * Інформація про товар
     */
    public function setGood(GoodItemPayloadGood $good): self
    {
        $this->initialized['good'] = true;
        $this->good = $good;

        return $this;
    }

    public function getGoodId(): ?string
    {
        return $this->goodId;
    }

    public function setGoodId(?string $goodId): self
    {
        $this->initialized['goodId'] = true;
        $this->goodId = $goodId;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getIsReturn(): bool
    {
        return $this->isReturn;
    }

    public function setIsReturn(bool $isReturn): self
    {
        $this->initialized['isReturn'] = true;
        $this->isReturn = $isReturn;

        return $this;
    }

    public function getIsWinningsPayout(): bool
    {
        return $this->isWinningsPayout;
    }

    public function setIsWinningsPayout(bool $isWinningsPayout): self
    {
        $this->initialized['isWinningsPayout'] = true;
        $this->isWinningsPayout = $isWinningsPayout;

        return $this;
    }

    /**
     * @return DiscountPayload[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @param DiscountPayload[] $discounts
     */
    public function setDiscounts(array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * Значення для розрахунку вартості товару від загальної суми.
     */
    public function getTotalSum(): int
    {
        return $this->totalSum;
    }

    /**
     * Значення для розрахунку вартості товару від загальної суми.
     */
    public function setTotalSum(int $totalSum): self
    {
        $this->initialized['totalSum'] = true;
        $this->totalSum = $totalSum;

        return $this;
    }
}
