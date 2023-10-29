<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ReceiptServicePayload extends ArrayObject
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
     * @var CashPaymentPayload|CardPaymentPayload|ObsoleteCardPaymentPayload
     */
    protected $payment;
    /**
     * @var string
     */
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;
    /**
     * @var array<string, mixed>
     */
    protected $context;
    /**
     * @var ReceiptConfigPayload
     */
    protected $custom;

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

    /**
     * @return CashPaymentPayload|CardPaymentPayload|ObsoleteCardPaymentPayload
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param CashPaymentPayload|CardPaymentPayload|ObsoleteCardPaymentPayload $payment
     */
    public function setPayment($payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;

        return $this;
    }

    public function getFiscalCode(): string
    {
        return $this->fiscalCode;
    }

    public function setFiscalCode(string $fiscalCode): self
    {
        $this->initialized['fiscalCode'] = true;
        $this->fiscalCode = $fiscalCode;

        return $this;
    }

    public function getFiscalDate(): DateTime
    {
        return $this->fiscalDate;
    }

    public function setFiscalDate(DateTime $fiscalDate): self
    {
        $this->initialized['fiscalDate'] = true;
        $this->fiscalDate = $fiscalDate;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getContext(): iterable
    {
        return $this->context;
    }

    /**
     * @param array<string, mixed> $context
     */
    public function setContext(iterable $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getCustom(): ReceiptConfigPayload
    {
        return $this->custom;
    }

    public function setCustom(ReceiptConfigPayload $custom): self
    {
        $this->initialized['custom'] = true;
        $this->custom = $custom;

        return $this;
    }
}
