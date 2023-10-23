<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultShortTransaction extends ArrayObject
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
     * @var PaginatedResultShortTransactionMeta
     */
    protected $meta;
    /**
     * @var ShortTransaction[]
     */
    protected $results;

    public function getMeta(): PaginatedResultShortTransactionMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultShortTransactionMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return ShortTransaction[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param ShortTransaction[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
