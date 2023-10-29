<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class OrganizationModel extends ArrayObject
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
    protected $title;
    /**
     * @var string
     */
    protected $edrpou;
    /**
     * @var string
     */
    protected $taxNumber;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var DateTime
     */
    protected $subscriptionExp;
    /**
     * @var int
     */
    protected $receiptsRatelimitCount;
    /**
     * @var int
     */
    protected $receiptsRatelimitInterval;
    /**
     * @var bool
     */
    protected $canSendSms;
    /**
     * @var bool
     */
    protected $useSeamlessMode;
    /**
     * @var int
     */
    protected $allowedOfflineDuration;

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

    public function getSubscriptionExp(): DateTime
    {
        return $this->subscriptionExp;
    }

    public function setSubscriptionExp(DateTime $subscriptionExp): self
    {
        $this->initialized['subscriptionExp'] = true;
        $this->subscriptionExp = $subscriptionExp;

        return $this;
    }

    public function getReceiptsRatelimitCount(): int
    {
        return $this->receiptsRatelimitCount;
    }

    public function setReceiptsRatelimitCount(int $receiptsRatelimitCount): self
    {
        $this->initialized['receiptsRatelimitCount'] = true;
        $this->receiptsRatelimitCount = $receiptsRatelimitCount;

        return $this;
    }

    public function getReceiptsRatelimitInterval(): int
    {
        return $this->receiptsRatelimitInterval;
    }

    public function setReceiptsRatelimitInterval(int $receiptsRatelimitInterval): self
    {
        $this->initialized['receiptsRatelimitInterval'] = true;
        $this->receiptsRatelimitInterval = $receiptsRatelimitInterval;

        return $this;
    }

    public function getCanSendSms(): bool
    {
        return $this->canSendSms;
    }

    public function setCanSendSms(bool $canSendSms): self
    {
        $this->initialized['canSendSms'] = true;
        $this->canSendSms = $canSendSms;

        return $this;
    }

    public function getUseSeamlessMode(): bool
    {
        return $this->useSeamlessMode;
    }

    public function setUseSeamlessMode(bool $useSeamlessMode): self
    {
        $this->initialized['useSeamlessMode'] = true;
        $this->useSeamlessMode = $useSeamlessMode;

        return $this;
    }

    public function getAllowedOfflineDuration(): int
    {
        return $this->allowedOfflineDuration;
    }

    public function setAllowedOfflineDuration(int $allowedOfflineDuration): self
    {
        $this->initialized['allowedOfflineDuration'] = true;
        $this->allowedOfflineDuration = $allowedOfflineDuration;

        return $this;
    }
}
