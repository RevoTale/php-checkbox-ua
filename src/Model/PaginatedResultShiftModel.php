<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultShiftModel extends ArrayObject
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
     * @var PaginatedResultShiftModelMeta
     */
    protected $meta;
    /**
     * @var ShiftModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultShiftModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultShiftModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return ShiftModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param ShiftModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
