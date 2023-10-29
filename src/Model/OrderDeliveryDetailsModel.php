<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class OrderDeliveryDetailsModel extends ArrayObject
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
     * @var AddressModel
     */
    protected $address;
    /**
     * @var int[]
     */
    protected $boxId;
    /**
     * @var string
     */
    protected $clientName;
    /**
     * @var string
     */
    protected $clientPhoneNumber;
    /**
     * @var DateTime
     */
    protected $deliveryTime;
    /**
     * @var string
     */
    protected $clientComment;
    /**
     * @var bool
     */
    protected $thermalDependence;

    public function getAddress(): AddressModel
    {
        return $this->address;
    }

    public function setAddress(AddressModel $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getBoxId(): array
    {
        return $this->boxId;
    }

    /**
     * @param int[] $boxId
     */
    public function setBoxId(array $boxId): self
    {
        $this->initialized['boxId'] = true;
        $this->boxId = $boxId;

        return $this;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function setClientName(string $clientName): self
    {
        $this->initialized['clientName'] = true;
        $this->clientName = $clientName;

        return $this;
    }

    public function getClientPhoneNumber(): string
    {
        return $this->clientPhoneNumber;
    }

    public function setClientPhoneNumber(string $clientPhoneNumber): self
    {
        $this->initialized['clientPhoneNumber'] = true;
        $this->clientPhoneNumber = $clientPhoneNumber;

        return $this;
    }

    public function getDeliveryTime(): DateTime
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(DateTime $deliveryTime): self
    {
        $this->initialized['deliveryTime'] = true;
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    public function getClientComment(): string
    {
        return $this->clientComment;
    }

    public function setClientComment(string $clientComment): self
    {
        $this->initialized['clientComment'] = true;
        $this->clientComment = $clientComment;

        return $this;
    }

    public function getThermalDependence(): bool
    {
        return $this->thermalDependence;
    }

    public function setThermalDependence(bool $thermalDependence): self
    {
        $this->initialized['thermalDependence'] = true;
        $this->thermalDependence = $thermalDependence;

        return $this;
    }
}
