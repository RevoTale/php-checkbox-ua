<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CashRegisterOfflineTime extends ArrayObject
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
     * @var CashRegisterOfflineTimeStatus
     */
    protected $status;
    /**
     * @var CashRegisterOfflineTimeSession[]
     */
    protected $sessions;

    public function getStatus(): CashRegisterOfflineTimeStatus
    {
        return $this->status;
    }

    public function setStatus(CashRegisterOfflineTimeStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return CashRegisterOfflineTimeSession[]
     */
    public function getSessions(): array
    {
        return $this->sessions;
    }

    /**
     * @param CashRegisterOfflineTimeSession[] $sessions
     */
    public function setSessions(array $sessions): self
    {
        $this->initialized['sessions'] = true;
        $this->sessions = $sessions;

        return $this;
    }
}
