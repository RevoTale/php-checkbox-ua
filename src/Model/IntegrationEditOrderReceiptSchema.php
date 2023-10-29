<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class IntegrationEditOrderReceiptSchema extends ArrayObject
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
    protected $cashierName;
    /**
     * @var string
     */
    protected $departament;
    /**
     * @var OrderGoodItemModel[]
     */
    protected $goods;
    /**
     * @var OrderGoodItemModel[]
     */
    protected $additionalGoods;
    /**
     * @var DiscountPayload[]
     */
    protected $discounts = [];
    /**
     * @var CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[]
     */
    protected $payments = [];
    /**
     * @var BonusPayload[]
     */
    protected $bonuses = [];
    /**
     * @var string
     */
    protected $header;
    /**
     * @var string
     */
    protected $footer;
    /**
     * @var string
     */
    protected $barcode;
    /**
     * @var DeliveryPayload
     */
    protected $delivery;

    protected $type = 'SELL';
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $orderId;

    public function getCashierName(): string
    {
        return $this->cashierName;
    }

    public function setCashierName(string $cashierName): self
    {
        $this->initialized['cashierName'] = true;
        $this->cashierName = $cashierName;

        return $this;
    }

    public function getDepartament(): string
    {
        return $this->departament;
    }

    public function setDepartament(string $departament): self
    {
        $this->initialized['departament'] = true;
        $this->departament = $departament;

        return $this;
    }

    /**
     * @return OrderGoodItemModel[]
     */
    public function getGoods(): array
    {
        return $this->goods;
    }

    /**
     * @param OrderGoodItemModel[] $goods
     */
    public function setGoods(array $goods): self
    {
        $this->initialized['goods'] = true;
        $this->goods = $goods;

        return $this;
    }

    /**
     * @return OrderGoodItemModel[]
     */
    public function getAdditionalGoods(): array
    {
        return $this->additionalGoods;
    }

    /**
     * @param OrderGoodItemModel[] $additionalGoods
     */
    public function setAdditionalGoods(array $additionalGoods): self
    {
        $this->initialized['additionalGoods'] = true;
        $this->additionalGoods = $additionalGoods;

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
     * @return CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[] $payments
     */
    public function setPayments(array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    /**
     * @return BonusPayload[]
     */
    public function getBonuses(): array
    {
        return $this->bonuses;
    }

    /**
     * @param BonusPayload[] $bonuses
     */
    public function setBonuses(array $bonuses): self
    {
        $this->initialized['bonuses'] = true;
        $this->bonuses = $bonuses;

        return $this;
    }

    public function getHeader(): string
    {
        return $this->header;
    }

    public function setHeader(string $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;

        return $this;
    }

    public function getFooter(): string
    {
        return $this->footer;
    }

    public function setFooter(string $footer): self
    {
        $this->initialized['footer'] = true;
        $this->footer = $footer;

        return $this;
    }

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;

        return $this;
    }

    public function getDelivery(): DeliveryPayload
    {
        return $this->delivery;
    }

    public function setDelivery(DeliveryPayload $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
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

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;

        return $this;
    }
}
