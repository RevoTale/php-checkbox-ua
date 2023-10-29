<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class OfflineCodesCountSchema extends ArrayObject
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
     * Доступна кількість.
     *
     * @var int
     */
    protected $available = 0;
    /**
     * Кількість кодів що запитується автоматично сервером CheckBox.
     *
     * @var int
     */
    protected $default = 0;
    /**
     * Мінімальна кількість кодів при досягненні якої виконується отримання нових кодів.
     *
     * @var int
     */
    protected $minimal = 0;
    /**
     * Кількість кодів, що відмічені використаними. Лічильник зкидається при отриманні нових кодів.
     *
     * @var int
     */
    protected $used = 0;

    /**
     * Доступна кількість.
     */
    public function getAvailable(): int
    {
        return $this->available;
    }

    /**
     * Доступна кількість.
     */
    public function setAvailable(int $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    /**
     * Кількість кодів що запитується автоматично сервером CheckBox.
     */
    public function getDefault(): int
    {
        return $this->default;
    }

    /**
     * Кількість кодів що запитується автоматично сервером CheckBox.
     */
    public function setDefault(int $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }

    /**
     * Мінімальна кількість кодів при досягненні якої виконується отримання нових кодів.
     */
    public function getMinimal(): int
    {
        return $this->minimal;
    }

    /**
     * Мінімальна кількість кодів при досягненні якої виконується отримання нових кодів.
     */
    public function setMinimal(int $minimal): self
    {
        $this->initialized['minimal'] = true;
        $this->minimal = $minimal;

        return $this;
    }

    /**
     * Кількість кодів, що відмічені використаними. Лічильник зкидається при отриманні нових кодів.
     */
    public function getUsed(): int
    {
        return $this->used;
    }

    /**
     * Кількість кодів, що відмічені використаними. Лічильник зкидається при отриманні нових кодів.
     */
    public function setUsed(int $used): self
    {
        $this->initialized['used'] = true;
        $this->used = $used;

        return $this;
    }
}
