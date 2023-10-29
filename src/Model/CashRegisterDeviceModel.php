<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CashRegisterDeviceModel extends ArrayObject
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
    protected $organizationId;
    /**
     * @var string
     */
    protected $fiscalNumber;
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
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var bool
     */
    protected $offlineMode;
    /**
     * @var bool
     */
    protected $stayOffline;
    /**
     * @var bool
     */
    protected $hasShift;
    /**
     * @var DocumentsStateModel
     */
    protected $documentsState;
    /**
     * @var DateTime
     */
    protected $emergencyDate;
    /**
     * @var string
     */
    protected $emergencyDetails;
    /**
     * @var bool
     */
    protected $isTest;
    /**
     * @var bool
     */
    protected $hasMonobankTerminal;

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

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;

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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

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

    public function getHasShift(): bool
    {
        return $this->hasShift;
    }

    public function setHasShift(bool $hasShift): self
    {
        $this->initialized['hasShift'] = true;
        $this->hasShift = $hasShift;

        return $this;
    }

    public function getDocumentsState(): DocumentsStateModel
    {
        return $this->documentsState;
    }

    public function setDocumentsState(DocumentsStateModel $documentsState): self
    {
        $this->initialized['documentsState'] = true;
        $this->documentsState = $documentsState;

        return $this;
    }

    public function getEmergencyDate(): DateTime
    {
        return $this->emergencyDate;
    }

    public function setEmergencyDate(DateTime $emergencyDate): self
    {
        $this->initialized['emergencyDate'] = true;
        $this->emergencyDate = $emergencyDate;

        return $this;
    }

    public function getEmergencyDetails(): string
    {
        return $this->emergencyDetails;
    }

    public function setEmergencyDetails(string $emergencyDetails): self
    {
        $this->initialized['emergencyDetails'] = true;
        $this->emergencyDetails = $emergencyDetails;

        return $this;
    }

    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    public function setIsTest(bool $isTest): self
    {
        $this->initialized['isTest'] = true;
        $this->isTest = $isTest;

        return $this;
    }

    public function getHasMonobankTerminal(): bool
    {
        return $this->hasMonobankTerminal;
    }

    public function setHasMonobankTerminal(bool $hasMonobankTerminal): self
    {
        $this->initialized['hasMonobankTerminal'] = true;
        $this->hasMonobankTerminal = $hasMonobankTerminal;

        return $this;
    }
}
