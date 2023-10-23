<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class ValidationError extends ArrayObject
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
     * @var mixed[]
     */
    protected $loc;
    /**
     * @var string
     */
    protected $msg;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return mixed[]
     */
    public function getLoc(): array
    {
        return $this->loc;
    }

    /**
     * @param mixed[] $loc
     */
    public function setLoc(array $loc): self
    {
        $this->initialized['loc'] = true;
        $this->loc = $loc;

        return $this;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }

    public function setMsg(string $msg): self
    {
        $this->initialized['msg'] = true;
        $this->msg = $msg;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
