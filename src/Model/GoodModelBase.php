<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class GoodModelBase extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $price;
    /**
     * @var string
     */
    protected $barcode;
    /**
     * @var string
     */
    protected $uktzed;
    /**
     * @var TaxModel[]
     */
    protected $taxes;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var string
     */
    protected $imageUrl;
    /**
     * @var bool
     */
    protected $isWeight;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;

        return $this;
    }

    public function getUktzed(): string
    {
        return $this->uktzed;
    }

    public function setUktzed(string $uktzed): self
    {
        $this->initialized['uktzed'] = true;
        $this->uktzed = $uktzed;

        return $this;
    }

    /**
     * @return TaxModel[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param TaxModel[] $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

        return $this;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getIsWeight(): bool
    {
        return $this->isWeight;
    }

    public function setIsWeight(bool $isWeight): self
    {
        $this->initialized['isWeight'] = true;
        $this->isWeight = $isWeight;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
