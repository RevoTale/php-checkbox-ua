<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CreateOrderModel extends ArrayObject
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
    protected $id;
    /**
     * @var string
     */
    protected $orderId;
    /**
     * @var string
     */
    protected $cashierId;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $customStatus;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $paymentMethod;
    /**
     * @var OrderReceiptModel
     */
    protected $receiptDraft;
    /**
     * @var OrderDeliveryDetailsModel
     */
    protected $deliveryDetails;
    /**
     * @var bool
     */
    protected $notFiscalize;
    /**
     * @var string
     */
    protected $stockCode;

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

    public function getCashierId(): string
    {
        return $this->cashierId;
    }

    public function setCashierId(string $cashierId): self
    {
        $this->initialized['cashierId'] = true;
        $this->cashierId = $cashierId;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getCustomStatus(): string
    {
        return $this->customStatus;
    }

    /**
     * An enumeration.
     */
    public function setCustomStatus(string $customStatus): self
    {
        $this->initialized['customStatus'] = true;
        $this->customStatus = $customStatus;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * An enumeration.
     */
    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getReceiptDraft(): OrderReceiptModel
    {
        return $this->receiptDraft;
    }

    public function setReceiptDraft(OrderReceiptModel $receiptDraft): self
    {
        $this->initialized['receiptDraft'] = true;
        $this->receiptDraft = $receiptDraft;

        return $this;
    }

    public function getDeliveryDetails(): OrderDeliveryDetailsModel
    {
        return $this->deliveryDetails;
    }

    public function setDeliveryDetails(OrderDeliveryDetailsModel $deliveryDetails): self
    {
        $this->initialized['deliveryDetails'] = true;
        $this->deliveryDetails = $deliveryDetails;

        return $this;
    }

    public function getNotFiscalize(): bool
    {
        return $this->notFiscalize;
    }

    public function setNotFiscalize(bool $notFiscalize): self
    {
        $this->initialized['notFiscalize'] = true;
        $this->notFiscalize = $notFiscalize;

        return $this;
    }

    public function getStockCode(): string
    {
        return $this->stockCode;
    }

    public function setStockCode(string $stockCode): self
    {
        $this->initialized['stockCode'] = true;
        $this->stockCode = $stockCode;

        return $this;
    }
}
