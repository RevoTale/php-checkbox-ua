<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CashRegisterOfflineTimeSession extends ArrayObject
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
    protected $start;
    /**
     * @var DateTime
     */
    protected $end;
    /**
     * @var float
     */
    protected $duration;

    public function getStart(): DateTime
    {
        return $this->start;
    }

    public function setStart(DateTime $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;

        return $this;
    }

    public function getEnd(): DateTime
    {
        return $this->end;
    }

    public function setEnd(DateTime $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;

        return $this;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function setDuration(float $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }
}
