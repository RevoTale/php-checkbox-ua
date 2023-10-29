<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class BonusPayload extends ArrayObject
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
    protected $bonusCard;
    /**
     * @var int
     */
    protected $value;
    /**
     * @var string
     */
    protected $additionalInfo;

    public function getBonusCard(): string
    {
        return $this->bonusCard;
    }

    public function setBonusCard(string $bonusCard): self
    {
        $this->initialized['bonusCard'] = true;
        $this->bonusCard = $bonusCard;

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

    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(string $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
