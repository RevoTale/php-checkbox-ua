<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ShortCloseShiftPayload extends ArrayObject
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
     * @var ShortCloseShiftPayloadReport
     */
    protected $report;

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

    public function getReport(): ShortCloseShiftPayloadReport
    {
        return $this->report;
    }

    public function setReport(ShortCloseShiftPayloadReport $report): self
    {
        $this->initialized['report'] = true;
        $this->report = $report;

        return $this;
    }
}
