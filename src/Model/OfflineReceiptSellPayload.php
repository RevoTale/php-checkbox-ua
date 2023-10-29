<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class OfflineReceiptSellPayload extends ArrayObject
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
     * @var GoodItemPayload[]
     */
    protected $goods;
    /**
     * @var DeliveryPayload
     */
    protected $delivery;
    /**
     * @var DiscountPayload[]
     */
    protected $discounts = [];
    /**
     * @var BonusPayload[]
     */
    protected $bonuses = [];
    /**
     * type.
     *
     * @var CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[]
     */
    protected $payments = [];
    /**
     * @var bool
     */
    protected $rounding = false;
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
     * @var string
     */
    protected $orderId;
    /**
     * @var string
     */
    protected $relatedReceiptId;
    /**
     * @var string
     */
    protected $stockCode;
    /**
     * id попереднього фіскального чеку (використовується опціонально для контролю послідовності).
     *
     * @var string
     */
    protected $previousReceiptId;
    /**
     * @var bool
     */
    protected $technicalReturn = false;
    /**
     * @var array<string, mixed>
     */
    protected $context;
    /**
     * @var bool
     */
    protected $isPawnshop = false;
    /**
     * @var ReceiptConfigPayload
     */
    protected $custom;
    /**
     * @var string
     */
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;

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

    /**
     * @return GoodItemPayload[]
     */
    public function getGoods(): array
    {
        return $this->goods;
    }

    /**
     * @param GoodItemPayload[] $goods
     */
    public function setGoods(array $goods): self
    {
        $this->initialized['goods'] = true;
        $this->goods = $goods;

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

    /**
     * type.
     *
     * @return CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * type.
     *
     * @param CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[] $payments
     */
    public function setPayments(array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    public function getRounding(): bool
    {
        return $this->rounding;
    }

    public function setRounding(bool $rounding): self
    {
        $this->initialized['rounding'] = true;
        $this->rounding = $rounding;

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

    public function getRelatedReceiptId(): string
    {
        return $this->relatedReceiptId;
    }

    public function setRelatedReceiptId(string $relatedReceiptId): self
    {
        $this->initialized['relatedReceiptId'] = true;
        $this->relatedReceiptId = $relatedReceiptId;

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

    public function getIsPawnshop(): bool
    {
        return $this->isPawnshop;
    }

    public function setIsPawnshop(bool $isPawnshop): self
    {
        $this->initialized['isPawnshop'] = true;
        $this->isPawnshop = $isPawnshop;

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
}
