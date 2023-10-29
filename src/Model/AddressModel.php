<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class AddressModel extends ArrayObject
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
     * An enumeration.
     *
     * @var string
     */
    protected $addressType;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $entrance;
    /**
     * @var string
     */
    protected $floor;
    /**
     * @var string
     */
    protected $apartmentNumber;
    /**
     * @var bool
     */
    protected $elevator;
    /**
     * @var bool
     */
    protected $intercom;

    /**
     * An enumeration.
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * An enumeration.
     */
    public function setAddressType(string $addressType): self
    {
        $this->initialized['addressType'] = true;
        $this->addressType = $addressType;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    public function getEntrance(): string
    {
        return $this->entrance;
    }

    public function setEntrance(string $entrance): self
    {
        $this->initialized['entrance'] = true;
        $this->entrance = $entrance;

        return $this;
    }

    public function getFloor(): string
    {
        return $this->floor;
    }

    public function setFloor(string $floor): self
    {
        $this->initialized['floor'] = true;
        $this->floor = $floor;

        return $this;
    }

    public function getApartmentNumber(): string
    {
        return $this->apartmentNumber;
    }

    public function setApartmentNumber(string $apartmentNumber): self
    {
        $this->initialized['apartmentNumber'] = true;
        $this->apartmentNumber = $apartmentNumber;

        return $this;
    }

    public function getElevator(): bool
    {
        return $this->elevator;
    }

    public function setElevator(bool $elevator): self
    {
        $this->initialized['elevator'] = true;
        $this->elevator = $elevator;

        return $this;
    }

    public function getIntercom(): bool
    {
        return $this->intercom;
    }

    public function setIntercom(bool $intercom): self
    {
        $this->initialized['intercom'] = true;
        $this->intercom = $intercom;

        return $this;
    }
}
