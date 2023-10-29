<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ShortOrganizationModel extends ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $edrpou;
    /**
     * @var string
     */
    protected $taxNumber;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getEdrpou(): string
    {
        return $this->edrpou;
    }

    public function setEdrpou(string $edrpou): self
    {
        $this->initialized['edrpou'] = true;
        $this->edrpou = $edrpou;

        return $this;
    }

    public function getTaxNumber(): string
    {
        return $this->taxNumber;
    }

    public function setTaxNumber(string $taxNumber): self
    {
        $this->initialized['taxNumber'] = true;
        $this->taxNumber = $taxNumber;

        return $this;
    }
}
