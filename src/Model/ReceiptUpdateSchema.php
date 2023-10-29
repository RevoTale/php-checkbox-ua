<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ReceiptUpdateSchema extends ArrayObject
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
     * @var ShortReceiptModel
     */
    protected $receipt;

    public function getReceipt(): ShortReceiptModel
    {
        return $this->receipt;
    }

    public function setReceipt(ShortReceiptModel $receipt): self
    {
        $this->initialized['receipt'] = true;
        $this->receipt = $receipt;

        return $this;
    }
}
