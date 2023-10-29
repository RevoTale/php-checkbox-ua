<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class GoOfflinePayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var DateTime
     */
    protected $goOfflineDate;
    /**
     * @var string
     */
    protected $fiscalCode;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getGoOfflineDate(): DateTime
    {
        return $this->goOfflineDate;
    }

    public function setGoOfflineDate(DateTime $goOfflineDate): self
    {
        $this->initialized['goOfflineDate'] = true;
        $this->goOfflineDate = $goOfflineDate;

        return $this;
    }

    public function getFiscalCode(): ?string
    {
        return $this->fiscalCode;
    }

    public function setFiscalCode(?string $fiscalCode): self
    {
        $this->initialized['fiscalCode'] = true;
        $this->fiscalCode = $fiscalCode;

        return $this;
    }
}
