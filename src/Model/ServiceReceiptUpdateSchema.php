<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ServiceReceiptUpdateSchema extends ArrayObject
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
    protected $serviceReceipt;

    public function getServiceReceipt(): ShortReceiptModel
    {
        return $this->serviceReceipt;
    }

    public function setServiceReceipt(ShortReceiptModel $serviceReceipt): self
    {
        $this->initialized['serviceReceipt'] = true;
        $this->serviceReceipt = $serviceReceipt;

        return $this;
    }
}
