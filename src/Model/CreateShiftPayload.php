<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CreateShiftPayload extends ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;

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
