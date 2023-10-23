<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultShiftWithCashRegisterModel extends ArrayObject
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
     * @var PaginatedResultShiftWithCashRegisterModelMeta
     */
    protected $meta;
    /**
     * @var ShiftWithCashRegisterModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultShiftWithCashRegisterModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultShiftWithCashRegisterModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return ShiftWithCashRegisterModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param ShiftWithCashRegisterModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
