<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ExtendedReportPayloadShort extends ArrayObject
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
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $mode;
    /**
     * @var string[]
     */
    protected $emails;

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

    /**
     * An enumeration.
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * An enumeration.
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;

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
}
