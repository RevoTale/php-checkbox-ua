<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultOrderModel extends ArrayObject
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
     * @var PaginatedResultOrderModelMeta
     */
    protected $meta;
    /**
     * @var OrderModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultOrderModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultOrderModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return OrderModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param OrderModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
