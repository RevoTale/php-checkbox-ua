<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class PaginatedResultReportModel extends ArrayObject
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
     * @var PaginatedResultReportModelMeta
     */
    protected $meta;
    /**
     * @var ReportModel[]
     */
    protected $results;

    public function getMeta(): PaginatedResultReportModelMeta
    {
        return $this->meta;
    }

    public function setMeta(PaginatedResultReportModelMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return ReportModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param ReportModel[] $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}
