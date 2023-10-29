<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultGoodModel extends ArrayObject
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
     * @var PaginatedResultGoodModelMeta
     */
    protected $meta;
    /**
     * @var SrsoSchemaGoodSchemaGoodModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultGoodModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultGoodModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return SrsoSchemaGoodSchemaGoodModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param SrsoSchemaGoodSchemaGoodModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
