<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultDetailedCashRegisterModel extends ArrayObject
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
     * @var PaginatedResultDetailedCashRegisterModelMeta
     */
    protected $meta;
    /**
     * @var DetailedCashRegisterModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultDetailedCashRegisterModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultDetailedCashRegisterModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return DetailedCashRegisterModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param DetailedCashRegisterModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
