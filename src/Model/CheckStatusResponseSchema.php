<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CheckStatusResponseSchema extends ArrayObject
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
    protected $taskId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var int
     */
    protected $chunksCount;
    /**
     * @var int
     */
    protected $totalItems;
    /**
     * @var int
     */
    protected $processedItems;
    /**
     * @var OperationErrorModel[]
     */
    protected $errors;

    public function getTaskId(): string
    {
        return $this->taskId;
    }

    public function setTaskId(string $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getChunksCount(): int
    {
        return $this->chunksCount;
    }

    public function setChunksCount(int $chunksCount): self
    {
        $this->initialized['chunksCount'] = true;
        $this->chunksCount = $chunksCount;

        return $this;
    }

    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    public function setTotalItems(int $totalItems): self
    {
        $this->initialized['totalItems'] = true;
        $this->totalItems = $totalItems;

        return $this;
    }

    public function getProcessedItems(): int
    {
        return $this->processedItems;
    }

    public function setProcessedItems(int $processedItems): self
    {
        $this->initialized['processedItems'] = true;
        $this->processedItems = $processedItems;

        return $this;
    }

    /**
     * @return OperationErrorModel[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param OperationErrorModel[] $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
