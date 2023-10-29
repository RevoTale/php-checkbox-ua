<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class SrsoSchemaReceiptSchemaGoodModel extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $barcode;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $exciseBarcodes;
    /**
     * @var string
     */
    protected $header;
    /**
     * @var string
     */
    protected $footer;
    /**
     * @var string
     */
    protected $uktzed;
    /**
     * @var int
     */
    protected $price;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExciseBarcodes(): array
    {
        return $this->exciseBarcodes;
    }

    /**
     * @param string[] $exciseBarcodes
     */
    public function setExciseBarcodes(array $exciseBarcodes): self
    {
        $this->initialized['exciseBarcodes'] = true;
        $this->exciseBarcodes = $exciseBarcodes;

        return $this;
    }

    public function getHeader(): ?string
    {
        return $this->header;
    }

    public function setHeader(?string $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;

        return $this;
    }

    public function getFooter(): ?string
    {
        return $this->footer;
    }

    public function setFooter(?string $footer): self
    {
        $this->initialized['footer'] = true;
        $this->footer = $footer;

        return $this;
    }

    public function getUktzed(): ?string
    {
        return $this->uktzed;
    }

    public function setUktzed(?string $uktzed): self
    {
        $this->initialized['uktzed'] = true;
        $this->uktzed = $uktzed;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }
}
