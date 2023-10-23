<?php

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CashierSignIn extends ArrayObject
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
    protected $login;
    /**
     * @var string
     */
    protected $password;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;

        return $this;
    }
}
