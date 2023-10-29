<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class ReportPaymentsPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $providerType;
    /**
     * @var int
     */
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var int
     */
    protected $sellSum;
    /**
     * @var int
     */
    protected $returnSum;
    /**
     * @var int
     */
    protected $serviceIn;
    /**
     * @var int
     */
    protected $serviceOut;
    /**
     * @var int
     */
    protected $cashWithdrawal = 0;
    /**
     * @var int
     */
    protected $cashWithdrawalCommission = 0;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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

    public function getProviderType(): ?string
    {
        return $this->providerType;
    }

    public function setProviderType(?string $providerType): self
    {
        $this->initialized['providerType'] = true;
        $this->providerType = $providerType;

        return $this;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getSellSum(): int
    {
        return $this->sellSum;
    }

    public function setSellSum(int $sellSum): self
    {
        $this->initialized['sellSum'] = true;
        $this->sellSum = $sellSum;

        return $this;
    }

    public function getReturnSum(): int
    {
        return $this->returnSum;
    }

    public function setReturnSum(int $returnSum): self
    {
        $this->initialized['returnSum'] = true;
        $this->returnSum = $returnSum;

        return $this;
    }

    public function getServiceIn(): int
    {
        return $this->serviceIn;
    }

    public function setServiceIn(int $serviceIn): self
    {
        $this->initialized['serviceIn'] = true;
        $this->serviceIn = $serviceIn;

        return $this;
    }

    public function getServiceOut(): int
    {
        return $this->serviceOut;
    }

    public function setServiceOut(int $serviceOut): self
    {
        $this->initialized['serviceOut'] = true;
        $this->serviceOut = $serviceOut;

        return $this;
    }

    public function getCashWithdrawal(): int
    {
        return $this->cashWithdrawal;
    }

    public function setCashWithdrawal(int $cashWithdrawal): self
    {
        $this->initialized['cashWithdrawal'] = true;
        $this->cashWithdrawal = $cashWithdrawal;

        return $this;
    }

    public function getCashWithdrawalCommission(): int
    {
        return $this->cashWithdrawalCommission;
    }

    public function setCashWithdrawalCommission(int $cashWithdrawalCommission): self
    {
        $this->initialized['cashWithdrawalCommission'] = true;
        $this->cashWithdrawalCommission = $cashWithdrawalCommission;

        return $this;
    }
}
