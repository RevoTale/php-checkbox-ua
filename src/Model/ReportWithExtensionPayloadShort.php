<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ReportWithExtensionPayloadShort extends ArrayObject
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
     * @var DateTime
     */
    protected $fromDate;
    /**
     * @var DateTime
     */
    protected $toDate;

    protected $branchId;

    protected $cashRegisterId;
    /**
     * @var string[]
     */
    protected $emails;
    /**
     * @var string
     */
    protected $exportExtension = 'EXCEL';
    /**
     * @var bool
     */
    protected $organizationInfo = false;

    public function getFromDate(): DateTime
    {
        return $this->fromDate;
    }

    public function setFromDate(DateTime $fromDate): self
    {
        $this->initialized['fromDate'] = true;
        $this->fromDate = $fromDate;

        return $this;
    }

    public function getToDate(): DateTime
    {
        return $this->toDate;
    }

    public function setToDate(DateTime $toDate): self
    {
        $this->initialized['toDate'] = true;
        $this->toDate = $toDate;

        return $this;
    }

    public function getBranchId()
    {
        return $this->branchId;
    }

    public function setBranchId($branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;

        return $this;
    }

    public function getCashRegisterId()
    {
        return $this->cashRegisterId;
    }

    public function setCashRegisterId($cashRegisterId): self
    {
        $this->initialized['cashRegisterId'] = true;
        $this->cashRegisterId = $cashRegisterId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @param string[] $emails
     */
    public function setEmails(array $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;

        return $this;
    }

    public function getExportExtension(): string
    {
        return $this->exportExtension;
    }

    public function setExportExtension(string $exportExtension): self
    {
        $this->initialized['exportExtension'] = true;
        $this->exportExtension = $exportExtension;

        return $this;
    }

    public function getOrganizationInfo(): bool
    {
        return $this->organizationInfo;
    }

    public function setOrganizationInfo(bool $organizationInfo): self
    {
        $this->initialized['organizationInfo'] = true;
        $this->organizationInfo = $organizationInfo;

        return $this;
    }
}
