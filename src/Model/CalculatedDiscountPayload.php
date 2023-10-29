<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CalculatedDiscountPayload extends ArrayObject
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
    protected $type;
    /**
     * @var string
     */
    protected $mode;
    /**
     * @var float
     */
    protected $value;

    protected $taxCode;

    protected $taxCodes;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $privilege;
    /**
     * @var float
     */
    protected $sum;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;

        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    public function getTaxCode()
    {
        return $this->taxCode;
    }

    public function setTaxCode($taxCode): self
    {
        $this->initialized['taxCode'] = true;
        $this->taxCode = $taxCode;

        return $this;
    }

    public function getTaxCodes()
    {
        return $this->taxCodes;
    }

    public function setTaxCodes($taxCodes): self
    {
        $this->initialized['taxCodes'] = true;
        $this->taxCodes = $taxCodes;

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

    public function getPrivilege(): string
    {
        return $this->privilege;
    }

    public function setPrivilege(string $privilege): self
    {
        $this->initialized['privilege'] = true;
        $this->privilege = $privilege;

        return $this;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function setSum(float $sum): self
    {
        $this->initialized['sum'] = true;
        $this->sum = $sum;

        return $this;
    }
}
