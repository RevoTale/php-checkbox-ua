<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class CashierAccessTokenResponseModel extends ArrayObject
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
    protected $type = 'bearer';
    /**
     * @var string
     */
    protected $tokenType = 'bearer';
    /**
     * @var string
     */
    protected $accessToken;

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

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): self
    {
        $this->initialized['tokenType'] = true;
        $this->tokenType = $tokenType;

        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;

        return $this;
    }
}
