<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ServiceCurrencyPayload extends ArrayObject
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
     * An enumeration.
     *
     * @var string
     */
    protected $type;
    /**
     * @var ServiceCurrencyItemPayload[]
     */
    protected $currencies;

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

    /**
     * An enumeration.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * An enumeration.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * @return ServiceCurrencyItemPayload[]
     */
    public function getCurrencies(): array
    {
        return $this->currencies;
    }

    /**
     * @param ServiceCurrencyItemPayload[] $currencies
     */
    public function setCurrencies(array $currencies): self
    {
        $this->initialized['currencies'] = true;
        $this->currencies = $currencies;

        return $this;
    }
}
