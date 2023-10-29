<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CashRegisterOfflineTimeStatus extends ArrayObject
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
     * @var float
     */
    protected $current = 0.0;
    /**
     * @var float
     */
    protected $total = 0.0;

    public function getCurrent(): float
    {
        return $this->current;
    }

    public function setCurrent(float $current): self
    {
        $this->initialized['current'] = true;
        $this->current = $current;

        return $this;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }
}
