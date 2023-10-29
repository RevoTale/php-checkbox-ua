<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ReportTaskSchema extends ArrayObject
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
    protected $organizationId;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $type;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $status;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $errorMessage;
    /**
     * @var array<string, mixed>
     */
    protected $payload;
    /**
     * @var float
     */
    protected $executionTime;

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

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;

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
     * An enumeration.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * An enumeration.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getPayload(): iterable
    {
        return $this->payload;
    }

    /**
     * @param array<string, mixed> $payload
     */
    public function setPayload(iterable $payload): self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;

        return $this;
    }

    public function getExecutionTime(): float
    {
        return $this->executionTime;
    }

    public function setExecutionTime(float $executionTime): self
    {
        $this->initialized['executionTime'] = true;
        $this->executionTime = $executionTime;

        return $this;
    }
}
