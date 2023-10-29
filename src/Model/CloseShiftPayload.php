<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CloseShiftPayload extends ArrayObject
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
     * @var bool
     */
    protected $skipClientNameCheck = false;
    /**
     * @var CloseShiftPayloadReport
     */
    protected $report;
    /**
     * @var string
     */
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;

    public function getSkipClientNameCheck(): bool
    {
        return $this->skipClientNameCheck;
    }

    public function setSkipClientNameCheck(bool $skipClientNameCheck): self
    {
        $this->initialized['skipClientNameCheck'] = true;
        $this->skipClientNameCheck = $skipClientNameCheck;

        return $this;
    }

    public function getReport(): CloseShiftPayloadReport
    {
        return $this->report;
    }

    public function setReport(CloseShiftPayloadReport $report): self
    {
        $this->initialized['report'] = true;
        $this->report = $report;

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
