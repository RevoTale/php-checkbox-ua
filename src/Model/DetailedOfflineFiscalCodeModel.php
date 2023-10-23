<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class DetailedOfflineFiscalCodeModel extends ArrayObject
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
    protected $fiscalCode;
    /**
     * @var int
     */
    protected $serialId;
    /**
     * @var string
     */
    protected $cashRegisterId;
    /**
     * @var DateTime
     */
    protected $createdAt;

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

    public function getSerialId(): int
    {
        return $this->serialId;
    }

    public function setSerialId(int $serialId): self
    {
        $this->initialized['serialId'] = true;
        $this->serialId = $serialId;

        return $this;
    }

    public function getCashRegisterId(): string
    {
        return $this->cashRegisterId;
    }

    public function setCashRegisterId(string $cashRegisterId): self
    {
        $this->initialized['cashRegisterId'] = true;
        $this->cashRegisterId = $cashRegisterId;

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
}
