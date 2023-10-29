<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ShiftUpdateSchema extends ArrayObject
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
     * @var ShiftModel
     */
    protected $shift;

    public function getShift(): ShiftModel
    {
        return $this->shift;
    }

    public function setShift(ShiftModel $shift): self
    {
        $this->initialized['shift'] = true;
        $this->shift = $shift;

        return $this;
    }
}
