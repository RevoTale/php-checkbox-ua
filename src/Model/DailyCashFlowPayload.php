<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class DailyCashFlowPayload extends ArrayObject
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
     * @var string[]
     */
    protected $organizationId;
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

    /**
     * @return string[]
     */
    public function getOrganizationId(): array
    {
        return $this->organizationId;
    }

    /**
     * @param string[] $organizationId
     */
    public function setOrganizationId(array $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;

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
