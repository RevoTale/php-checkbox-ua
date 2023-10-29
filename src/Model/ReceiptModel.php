<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ReceiptModel extends ArrayObject
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
     * An enumeration.
     */
    protected $type;
    /**
     * @var ShortTransaction
     */
    protected $transaction;
    /**
     * @var int
     */
    protected $serial;
    /**
     * An enumeration.
     */
    protected $status;
    /**
     * @var GoodItemModel[]
     */
    protected $goods;
    /**
     * @var CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[]
     */
    protected $payments;
    /**
     * Застаріле поле, використовуйте 'total_sum'.
     *
     * @var int
     */
    protected $totalSum;
    /**
     * @var int
     */
    protected $totalPayment;
    /**
     * Застаріле поле, використовуйте 'total_rest'.
     *
     * @var int
     */
    protected $totalRest;
    /**
     * @var int
     */
    protected $roundSum;
    /**
     * @var string
     */
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;
    /**
     * @var DateTime
     */
    protected $deliveredAt;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var GoodTax[]
     */
    protected $taxes;
    /**
     * @var DiscountModel[]
     */
    protected $discounts;
    /**
     * @var string
     */
    protected $orderId;
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
     * @var ReceiptConfigPayload
     */
    protected $custom;
    /**
     * @var array<string, mixed>
     */
    protected $context;
    /**
     * @var bool
     */
    protected $isCreatedOffline = false;
    /**
     * @var bool
     */
    protected $isSentDps = false;
    /**
     * @var DateTime
     */
    protected $sentDpsAt;
    /**
     * @var string
     */
    protected $taxUrl;
    /**
     * @var string
     */
    protected $relatedReceiptId;
    /**
     * @var bool
     */
    protected $technicalReturn = false;
    /**
     * @var string
     */
    protected $stockCode;
    /**
     * @var CurrencyExchangeSchema
     */
    protected $currencyExchange;
    /**
     * @var ShiftWithCashierAndCashRegister
     */
    protected $shift;
    /**
     * @var string
     */
    protected $controlNumber;

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

    /**
     * An enumeration.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * An enumeration.
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getTransaction(): ShortTransaction
    {
        return $this->transaction;
    }

    public function setTransaction(ShortTransaction $transaction): self
    {
        $this->initialized['transaction'] = true;
        $this->transaction = $transaction;

        return $this;
    }

    public function getSerial(): int
    {
        return $this->serial;
    }

    public function setSerial(int $serial): self
    {
        $this->initialized['serial'] = true;
        $this->serial = $serial;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * An enumeration.
     */
    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return GoodItemModel[]
     */
    public function getGoods(): array
    {
        return $this->goods;
    }

    /**
     * @param GoodItemModel[] $goods
     */
    public function setGoods(array $goods): self
    {
        $this->initialized['goods'] = true;
        $this->goods = $goods;

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
     * Застаріле поле, використовуйте 'total_sum'.
     */
    public function getTotalSum(): int
    {
        return $this->totalSum;
    }

    /**
     * Застаріле поле, використовуйте 'total_sum'.
     */
    public function setTotalSum(int $totalSum): self
    {
        $this->initialized['totalSum'] = true;
        $this->totalSum = $totalSum;

        return $this;
    }

    public function getTotalPayment(): int
    {
        return $this->totalPayment;
    }

    public function setTotalPayment(int $totalPayment): self
    {
        $this->initialized['totalPayment'] = true;
        $this->totalPayment = $totalPayment;

        return $this;
    }

    /**
     * Застаріле поле, використовуйте 'total_rest'.
     */
    public function getTotalRest(): int
    {
        return $this->totalRest;
    }

    /**
     * Застаріле поле, використовуйте 'total_rest'.
     */
    public function setTotalRest(int $totalRest): self
    {
        $this->initialized['totalRest'] = true;
        $this->totalRest = $totalRest;

        return $this;
    }

    public function getRoundSum(): int
    {
        return $this->roundSum;
    }

    public function setRoundSum(int $roundSum): self
    {
        $this->initialized['roundSum'] = true;
        $this->roundSum = $roundSum;

        return $this;
    }

    public function getFiscalCode(): ?string
    {
        return $this->fiscalCode;
    }

    public function setFiscalCode(?string $fiscalCode): self
    {
        $this->initialized['fiscalCode'] = true;
        $this->fiscalCode = $fiscalCode;

        return $this;
    }

    public function getFiscalDate(): ?DateTime
    {
        return $this->fiscalDate;
    }

    public function setFiscalDate(?DateTime $fiscalDate): self
    {
        $this->initialized['fiscalDate'] = true;
        $this->fiscalDate = $fiscalDate;

        return $this;
    }

    public function getDeliveredAt(): ?DateTime
    {
        return $this->deliveredAt;
    }

    public function setDeliveredAt(?DateTime $deliveredAt): self
    {
        $this->initialized['deliveredAt'] = true;
        $this->deliveredAt = $deliveredAt;

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

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;

        return $this;
    }

    public function getHeader(): ?string
    {
        return $this->header;
    }

    public function setHeader(?string $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;

        return $this;
    }

    public function getFooter(): ?string
    {
        return $this->footer;
    }

    public function setFooter(?string $footer): self
    {
        $this->initialized['footer'] = true;
        $this->footer = $footer;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;

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

    public function getIsCreatedOffline(): bool
    {
        return $this->isCreatedOffline;
    }

    public function setIsCreatedOffline(bool $isCreatedOffline): self
    {
        $this->initialized['isCreatedOffline'] = true;
        $this->isCreatedOffline = $isCreatedOffline;

        return $this;
    }

    public function getIsSentDps(): bool
    {
        return $this->isSentDps;
    }

    public function setIsSentDps(bool $isSentDps): self
    {
        $this->initialized['isSentDps'] = true;
        $this->isSentDps = $isSentDps;

        return $this;
    }

    public function getSentDpsAt(): ?DateTime
    {
        return $this->sentDpsAt;
    }

    public function setSentDpsAt(?DateTime $sentDpsAt): self
    {
        $this->initialized['sentDpsAt'] = true;
        $this->sentDpsAt = $sentDpsAt;

        return $this;
    }

    public function getTaxUrl(): string
    {
        return $this->taxUrl;
    }

    public function setTaxUrl(?string $taxUrl): self
    {
        $this->initialized['taxUrl'] = true;
        $this->taxUrl = $taxUrl;

        return $this;
    }

    public function getRelatedReceiptId(): ?string
    {
        return $this->relatedReceiptId;
    }

    public function setRelatedReceiptId(?string $relatedReceiptId): self
    {
        $this->initialized['relatedReceiptId'] = true;
        $this->relatedReceiptId = $relatedReceiptId;

        return $this;
    }

    public function getTechnicalReturn(): bool
    {
        return $this->technicalReturn;
    }

    public function setTechnicalReturn(bool $technicalReturn): self
    {
        $this->initialized['technicalReturn'] = true;
        $this->technicalReturn = $technicalReturn;

        return $this;
    }

    public function getStockCode(): ?string
    {
        return $this->stockCode;
    }

    public function setStockCode(?string $stockCode): self
    {
        $this->initialized['stockCode'] = true;
        $this->stockCode = $stockCode;

        return $this;
    }

    public function getCurrencyExchange(): ?CurrencyExchangeSchema
    {
        return $this->currencyExchange;
    }

    public function setCurrencyExchange(?CurrencyExchangeSchema $currencyExchange): self
    {
        $this->initialized['currencyExchange'] = true;
        $this->currencyExchange = $currencyExchange;

        return $this;
    }

    public function getShift(): ShiftWithCashierAndCashRegister
    {
        return $this->shift;
    }

    public function setShift(ShiftWithCashierAndCashRegister $shift): self
    {
        $this->initialized['shift'] = true;
        $this->shift = $shift;

        return $this;
    }

    public function getControlNumber(): ?string
    {
        return $this->controlNumber;
    }

    public function setControlNumber(?string $controlNumber): self
    {
        $this->initialized['controlNumber'] = true;
        $this->controlNumber = $controlNumber;

        return $this;
    }
}
