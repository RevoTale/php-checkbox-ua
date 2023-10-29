<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class UpdateTransactionPayload extends ArrayObject
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
    protected $requestSignature;

    public function getRequestSignature(): string
    {
        return $this->requestSignature;
    }

    public function setRequestSignature(string $requestSignature): self
    {
        $this->initialized['requestSignature'] = true;
        $this->requestSignature = $requestSignature;

        return $this;
    }
}
