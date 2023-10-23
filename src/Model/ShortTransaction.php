<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class ShortTransaction extends ArrayObject
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
     * An enumeration.
     */
    protected $type;
    /**
     * @var int
     */
    protected $serial;
    /**
     * An enumeration.
     */
    protected $status;
    /**
     * @var DateTime
     */
    protected $requestSignedAt;
    /**
     * @var DateTime
     */
    protected $requestReceivedAt;
    /**
     * @var string
     */
    protected $responseStatus;
    /**
     * @var string
     */
    protected $responseErrorMessage;
    /**
     * @var string
     */
    protected $responseId;
    /**
     * @var string
     */
    protected $offlineId;
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
    protected $originalDatetime;
    /**
     * @var string
     */
    protected $previousHash;

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

    /**
     * An enumeration.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * An enumeration.
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getSerial(): int
    {
        return $this->serial;
    }

    public function setSerial(int $serial): self
    {
        $this->initialized['serial'] = true;
        $this->serial = $serial;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * An enumeration.
     */
    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getRequestSignedAt(): ?DateTime
    {
        return $this->requestSignedAt;
    }

    public function setRequestSignedAt(?DateTime $requestSignedAt): self
    {
        $this->initialized['requestSignedAt'] = true;
        $this->requestSignedAt = $requestSignedAt;

        return $this;
    }

    public function getRequestReceivedAt(): ?DateTime
    {
        return $this->requestReceivedAt;
    }

    public function setRequestReceivedAt(?DateTime $requestReceivedAt): self
    {
        $this->initialized['requestReceivedAt'] = true;
        $this->requestReceivedAt = $requestReceivedAt;

        return $this;
    }

    public function getResponseStatus(): ?string
    {
        return $this->responseStatus;
    }

    public function setResponseStatus(?string $responseStatus): self
    {
        $this->initialized['responseStatus'] = true;
        $this->responseStatus = $responseStatus;

        return $this;
    }

    public function getResponseErrorMessage(): ?string
    {
        return $this->responseErrorMessage;
    }

    public function setResponseErrorMessage(?string $responseErrorMessage): self
    {
        $this->initialized['responseErrorMessage'] = true;
        $this->responseErrorMessage = $responseErrorMessage;

        return $this;
    }

    public function getResponseId(): ?string
    {
        return $this->responseId;
    }

    public function setResponseId(?string $responseId): self
    {
        $this->initialized['responseId'] = true;
        $this->responseId = $responseId;

        return $this;
    }

    public function getOfflineId(): ?string
    {
        return $this->offlineId;
    }

    public function setOfflineId(?string $offlineId): self//Manualy fixed nullability
    {
        $this->initialized['offlineId'] = true;
        $this->offlineId = $offlineId;

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

    public function getOriginalDatetime(): DateTime
    {
        return $this->originalDatetime;
    }

    public function setOriginalDatetime(DateTime $originalDatetime): self
    {
        $this->initialized['originalDatetime'] = true;
        $this->originalDatetime = $originalDatetime;

        return $this;
    }

    public function getPreviousHash(): string
    {
        return $this->previousHash;
    }

    public function setPreviousHash(string $previousHash): self
    {
        $this->initialized['previousHash'] = true;
        $this->previousHash = $previousHash;

        return $this;
    }
}
