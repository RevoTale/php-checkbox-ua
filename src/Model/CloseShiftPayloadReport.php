<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CloseShiftPayloadReport extends ArrayObject
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
     * @var int
     */
    protected $serial;
    /**
     * @var ReportPaymentsPayload[]
     */
    protected $payments;
    /**
     * @var ReportTaxesPayload[]
     */
    protected $taxes;
    /**
     * @var int
     */
    protected $sellReceiptsCount;
    /**
     * @var int
     */
    protected $returnReceiptsCount;
    /**
     * @var int
     */
    protected $cashWithdrawalReceiptsCount = 0;
    /**
     * @var string
     */
    protected $lastReceiptId;
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
    protected $salesRoundUp = 0;
    /**
     * @var int
     */
    protected $salesRoundDown = 0;
    /**
     * @var int
     */
    protected $returnsRoundUp = 0;
    /**
     * @var int
     */
    protected $returnsRoundDown = 0;
    /**
     * @var int
     */
    protected $discountsSum;
    /**
     * @var int
     */
    protected $extraChargeSum;
    /**
     * @var DateTime
     */
    protected $createdAt;

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
     * @return ReportPaymentsPayload[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param ReportPaymentsPayload[] $payments
     */
    public function setPayments(array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    /**
     * @return ReportTaxesPayload[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param ReportTaxesPayload[] $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

        return $this;
    }

    public function getSellReceiptsCount(): int
    {
        return $this->sellReceiptsCount;
    }

    public function setSellReceiptsCount(int $sellReceiptsCount): self
    {
        $this->initialized['sellReceiptsCount'] = true;
        $this->sellReceiptsCount = $sellReceiptsCount;

        return $this;
    }

    public function getReturnReceiptsCount(): int
    {
        return $this->returnReceiptsCount;
    }

    public function setReturnReceiptsCount(int $returnReceiptsCount): self
    {
        $this->initialized['returnReceiptsCount'] = true;
        $this->returnReceiptsCount = $returnReceiptsCount;

        return $this;
    }

    public function getCashWithdrawalReceiptsCount(): int
    {
        return $this->cashWithdrawalReceiptsCount;
    }

    public function setCashWithdrawalReceiptsCount(int $cashWithdrawalReceiptsCount): self
    {
        $this->initialized['cashWithdrawalReceiptsCount'] = true;
        $this->cashWithdrawalReceiptsCount = $cashWithdrawalReceiptsCount;

        return $this;
    }

    public function getLastReceiptId(): string
    {
        return $this->lastReceiptId;
    }

    public function setLastReceiptId(string $lastReceiptId): self
    {
        $this->initialized['lastReceiptId'] = true;
        $this->lastReceiptId = $lastReceiptId;

        return $this;
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

    public function getSalesRoundUp(): int
    {
        return $this->salesRoundUp;
    }

    public function setSalesRoundUp(int $salesRoundUp): self
    {
        $this->initialized['salesRoundUp'] = true;
        $this->salesRoundUp = $salesRoundUp;

        return $this;
    }

    public function getSalesRoundDown(): int
    {
        return $this->salesRoundDown;
    }

    public function setSalesRoundDown(int $salesRoundDown): self
    {
        $this->initialized['salesRoundDown'] = true;
        $this->salesRoundDown = $salesRoundDown;

        return $this;
    }

    public function getReturnsRoundUp(): int
    {
        return $this->returnsRoundUp;
    }

    public function setReturnsRoundUp(int $returnsRoundUp): self
    {
        $this->initialized['returnsRoundUp'] = true;
        $this->returnsRoundUp = $returnsRoundUp;

        return $this;
    }

    public function getReturnsRoundDown(): int
    {
        return $this->returnsRoundDown;
    }

    public function setReturnsRoundDown(int $returnsRoundDown): self
    {
        $this->initialized['returnsRoundDown'] = true;
        $this->returnsRoundDown = $returnsRoundDown;

        return $this;
    }

    public function getDiscountsSum(): ?int
    {
        return $this->discountsSum;
    }

    public function setDiscountsSum(?int $discountsSum): self// Manually fixed nulllability
    {
        $this->initialized['discountsSum'] = true;
        $this->discountsSum = $discountsSum;

        return $this;
    }

    public function getExtraChargeSum(): ?int
    {
        return $this->extraChargeSum;
    }

    public function setExtraChargeSum(?int $extraChargeSum): self
    {
        $this->initialized['extraChargeSum'] = true;
        $this->extraChargeSum = $extraChargeSum;

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
}
