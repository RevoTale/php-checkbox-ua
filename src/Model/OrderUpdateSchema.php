<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class OrderUpdateSchema extends ArrayObject
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
     * @var OrderModel
     */
    protected $order;

    public function getOrder(): OrderModel
    {
        return $this->order;
    }

    public function setOrder(OrderModel $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }
}
