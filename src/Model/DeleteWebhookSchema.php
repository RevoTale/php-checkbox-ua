<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class DeleteWebhookSchema extends ArrayObject
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
     * @var bool
     */
    protected $ok;

    public function getOk(): bool
    {
        return $this->ok;
    }

    public function setOk(bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;

        return $this;
    }
}
