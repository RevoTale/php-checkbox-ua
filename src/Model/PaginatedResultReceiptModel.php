<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultReceiptModel extends ArrayObject
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
     * @var PaginatedResultReceiptModelMeta
     */
    protected $meta;
    /**
     * @var ReceiptModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultReceiptModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultReceiptModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return ReceiptModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param ReceiptModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
