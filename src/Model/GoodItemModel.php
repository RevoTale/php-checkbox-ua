<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class GoodItemModel extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var SrsoSchemaReceiptSchemaGoodModel
     */
    protected $good;
    /**
     * @var string
     */
    protected $goodId;
    /**
     * @var int
     */
    protected $sum;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var bool
     */
    protected $isReturn;
    /**
     * @var GoodTax[]
     */
    protected $taxes;
    /**
     * @var DiscountModel[]
     */
    protected $discounts;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getGood(): SrsoSchemaReceiptSchemaGoodModel
    {
        return $this->good;
    }

    public function setGood(SrsoSchemaReceiptSchemaGoodModel $good): self
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

    public function getSum(): int
    {
        return $this->sum;
    }

    public function setSum(int $sum): self
    {
        $this->initialized['sum'] = true;
        $this->sum = $sum;

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

    /**
     * @return GoodTax[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param GoodTax[] $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * @return DiscountModel[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @param DiscountModel[] $discounts
     */
    public function setDiscounts(array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }
}
