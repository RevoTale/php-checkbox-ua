<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CashWithdrawalReceiptPayload extends ArrayObject
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
    protected $cashierName;
    /**
     * @var string
     */
    protected $departament;
    /**
     * @var CardPaymentPayload
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
     * @var array<string, mixed>
     */
    protected $context;
    /**
     * @var DeliveryPayload
     */
    protected $delivery;
    /**
     * id попереднього фіскального чеку (використовується опціонально для контролю послідовності).
     *
     * @var string
     */
    protected $previousReceiptId;

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

    public function getPayment(): CardPaymentPayload
    {
        return $this->payment;
    }

    public function setPayment(CardPaymentPayload $payment): self
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

    /**
     * id попереднього фіскального чеку (використовується опціонально для контролю послідовності).
     */
    public function getPreviousReceiptId(): string
    {
        return $this->previousReceiptId;
    }

    /**
     * id попереднього фіскального чеку (використовується опціонально для контролю послідовності).
     */
    public function setPreviousReceiptId(string $previousReceiptId): self
    {
        $this->initialized['previousReceiptId'] = true;
        $this->previousReceiptId = $previousReceiptId;

        return $this;
    }
}
