<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CalculatedReceiptSellPayload extends ArrayObject
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
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;
    /**
     * @var float
     */
    protected $totalPayment;
    /**
     * @var float
     */
    protected $totalSum;
    /**
     * @var float
     */
    protected $roundSum;
    /**
     * @var float
     */
    protected $totalRest;
    /**
     * @var bool
     */
    protected $technicalReturn = false;
    /**
     * @var CalculatedGoodItemPayload[]
     */
    protected $goods;
    /**
     * @var CashPaymentPayload[]|CardPaymentPayload[]|ObsoleteCardPaymentPayload[]
     */
    protected $payments;
    /**
     * @var bool
     */
    protected $isSell = true;
    /**
     * @var CalculatedDiscountPayload[]
     */
    protected $discounts = [];
    /**
     * @var BonusPayload[]
     */
    protected $bonuses = [];
    /**
     * @var CalculatedReceiptTaxPayload[]
     */
    protected $taxes;
    /**
     * @var DeliveryPayload
     */
    protected $delivery;
    /**
     * @var string
     */
    protected $cashierName;
    /**
     * @var string
     */
    protected $departament;
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

    public function getTotalPayment(): float
    {
        return $this->totalPayment;
    }

    public function setTotalPayment(float $totalPayment): self
    {
        $this->initialized['totalPayment'] = true;
        $this->totalPayment = $totalPayment;

        return $this;
    }

    public function getTotalSum(): float
    {
        return $this->totalSum;
    }

    public function setTotalSum(float $totalSum): self
    {
        $this->initialized['totalSum'] = true;
        $this->totalSum = $totalSum;

        return $this;
    }

    public function getRoundSum(): float
    {
        return $this->roundSum;
    }

    public function setRoundSum(float $roundSum): self
    {
        $this->initialized['roundSum'] = true;
        $this->roundSum = $roundSum;

        return $this;
    }

    public function getTotalRest(): float
    {
        return $this->totalRest;
    }

    public function setTotalRest(float $totalRest): self
    {
        $this->initialized['totalRest'] = true;
        $this->totalRest = $totalRest;

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
     * @return CalculatedGoodItemPayload[]
     */
    public function getGoods(): array
    {
        return $this->goods;
    }

    /**
     * @param CalculatedGoodItemPayload[] $goods
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

    public function getIsSell(): bool
    {
        return $this->isSell;
    }

    public function setIsSell(bool $isSell): self
    {
        $this->initialized['isSell'] = true;
        $this->isSell = $isSell;

        return $this;
    }

    /**
     * @return CalculatedDiscountPayload[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @param CalculatedDiscountPayload[] $discounts
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
     * @return CalculatedReceiptTaxPayload[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param CalculatedReceiptTaxPayload[] $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

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
