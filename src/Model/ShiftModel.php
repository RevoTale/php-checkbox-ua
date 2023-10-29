<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ShiftModel extends ArrayObject
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
     * An enumeration.
     */
    protected $status;
    /**
     * @var ReportModel
     */
    protected $zReport;
    /**
     * @var DateTime
     */
    protected $openedAt;
    /**
     * @var DateTime
     */
    protected $closedAt;
    /**
     * @var ShortTransaction
     */
    protected $initialTransaction;
    /**
     * @var ShortTransaction
     */
    protected $closingTransaction;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var BalanceModel
     */
    protected $balance;
    /**
     * @var ShiftTaxModel[]
     */
    protected $taxes;
    /**
     * @var bool
     */
    protected $emergencyClose;
    /**
     * @var string
     */
    protected $emergencyCloseDetails;

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

    public function getZReport(): ReportModel
    {
        return $this->zReport;
    }

    public function setZReport(ReportModel $zReport): self
    {
        $this->initialized['zReport'] = true;
        $this->zReport = $zReport;

        return $this;
    }

    public function getOpenedAt(): DateTime
    {
        return $this->openedAt;
    }

    public function setOpenedAt(?DateTime $openedAt): self
    {
        $this->initialized['openedAt'] = true;
        $this->openedAt = $openedAt;

        return $this;
    }

    public function getClosedAt(): ?DateTime
    {
        return $this->closedAt;
    }

    public function setClosedAt(?DateTime $closedAt): self
    {
        $this->initialized['closedAt'] = true;
        $this->closedAt = $closedAt;

        return $this;
    }

    public function getInitialTransaction(): ShortTransaction
    {
        return $this->initialTransaction;
    }

    public function setInitialTransaction(ShortTransaction $initialTransaction): self
    {
        $this->initialized['initialTransaction'] = true;
        $this->initialTransaction = $initialTransaction;

        return $this;
    }

    public function getClosingTransaction(): ShortTransaction
    {
        return $this->closingTransaction;
    }

    public function setClosingTransaction(ShortTransaction $closingTransaction): self
    {
        $this->initialized['closingTransaction'] = true;
        $this->closingTransaction = $closingTransaction;

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

    public function getBalance(): BalanceModel
    {
        return $this->balance;
    }

    public function setBalance(BalanceModel $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }

    /**
     * @return ShiftTaxModel[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param ShiftTaxModel[] $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

        return $this;
    }

    public function getEmergencyClose(): ?bool
    {
        return $this->emergencyClose;
    }

    public function setEmergencyClose(?bool $emergencyClose): self
    {
        $this->initialized['emergencyClose'] = true;
        $this->emergencyClose = $emergencyClose;

        return $this;
    }

    public function getEmergencyCloseDetails(): string
    {
        return $this->emergencyCloseDetails;
    }

    public function setEmergencyCloseDetails(string $emergencyCloseDetails): self
    {
        $this->initialized['emergencyCloseDetails'] = true;
        $this->emergencyCloseDetails = $emergencyCloseDetails;

        return $this;
    }
}
