<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class DetailedCashRegisterModel extends ArrayObject
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
     * @var string
     */
    protected $fiscalNumber;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var ShiftWithCashierModel
     */
    protected $shift;
    /**
     * @var bool
     */
    protected $offlineMode = false;
    /**
     * @var bool
     */
    protected $stayOffline = false;
    /**
     * @var BranchModel
     */
    protected $branch;
    /**
     * @var string
     */
    protected $address;

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

    public function getFiscalNumber(): string
    {
        return $this->fiscalNumber;
    }

    public function setFiscalNumber(string $fiscalNumber): self
    {
        $this->initialized['fiscalNumber'] = true;
        $this->fiscalNumber = $fiscalNumber;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

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

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    public function getShift(): ShiftWithCashierModel
    {
        return $this->shift;
    }

    public function setShift(ShiftWithCashierModel $shift): self
    {
        $this->initialized['shift'] = true;
        $this->shift = $shift;

        return $this;
    }

    public function getOfflineMode(): bool
    {
        return $this->offlineMode;
    }

    public function setOfflineMode(bool $offlineMode): self
    {
        $this->initialized['offlineMode'] = true;
        $this->offlineMode = $offlineMode;

        return $this;
    }

    public function getStayOffline(): bool
    {
        return $this->stayOffline;
    }

    public function setStayOffline(bool $stayOffline): self
    {
        $this->initialized['stayOffline'] = true;
        $this->stayOffline = $stayOffline;

        return $this;
    }

    public function getBranch(): BranchModel
    {
        return $this->branch;
    }

    public function setBranch(BranchModel $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
