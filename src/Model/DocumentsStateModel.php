<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class DocumentsStateModel extends ArrayObject
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
     * @var int
     */
    protected $lastReceiptCode;
    /**
     * @var int
     */
    protected $lastReportCode;
    /**
     * @var int
     */
    protected $lastZReportCode;

    public function getLastReceiptCode(): int
    {
        return $this->lastReceiptCode;
    }

    public function setLastReceiptCode(int $lastReceiptCode): self
    {
        $this->initialized['lastReceiptCode'] = true;
        $this->lastReceiptCode = $lastReceiptCode;

        return $this;
    }

    public function getLastReportCode(): int
    {
        return $this->lastReportCode;
    }

    public function setLastReportCode(int $lastReportCode): self
    {
        $this->initialized['lastReportCode'] = true;
        $this->lastReportCode = $lastReportCode;

        return $this;
    }

    public function getLastZReportCode(): int
    {
        return $this->lastZReportCode;
    }

    public function setLastZReportCode(int $lastZReportCode): self
    {
        $this->initialized['lastZReportCode'] = true;
        $this->lastZReportCode = $lastZReportCode;

        return $this;
    }
}
