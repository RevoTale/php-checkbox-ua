<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CashPaymentPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $type = 'CASH';
    /**
     * @var bool
     */
    protected $pawnshopIsReturn;
    /**
     * @var int
     */
    protected $value;
    /**
     * @var string
     */
    protected $label = 'Готівка';

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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

    public function getPawnshopIsReturn(): ?bool
    {
        return $this->pawnshopIsReturn;
    }

    public function setPawnshopIsReturn(?bool $pawnshopIsReturn): self
    {
        $this->initialized['pawnshopIsReturn'] = true;
        $this->pawnshopIsReturn = $pawnshopIsReturn;

        return $this;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
