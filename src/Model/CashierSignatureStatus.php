<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CashierSignatureStatus extends ArrayObject
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
    protected $online;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $shiftOpenPossibility;

    public function getOnline(): bool
    {
        return $this->online;
    }

    public function setOnline(bool $online): self
    {
        $this->initialized['online'] = true;
        $this->online = $online;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * An enumeration.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getShiftOpenPossibility(): bool
    {
        return $this->shiftOpenPossibility;
    }

    public function setShiftOpenPossibility(bool $shiftOpenPossibility): self
    {
        $this->initialized['shiftOpenPossibility'] = true;
        $this->shiftOpenPossibility = $shiftOpenPossibility;

        return $this;
    }
}
