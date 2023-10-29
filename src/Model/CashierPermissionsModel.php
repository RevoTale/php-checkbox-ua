<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CashierPermissionsModel extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool
     */
    protected $orders = false;
    /**
     * @var bool
     */
    protected $addDiscounts = true;
    /**
     * @var bool
     */
    protected $editingGoodsSum = true;
    /**
     * @var bool
     */
    protected $deferredReceipt = true;
    /**
     * @var bool
     */
    protected $editingGoodPrice = true;
    /**
     * @var bool
     */
    protected $canAddManualGood = true;
    /**
     * @var bool
     */
    protected $serviceIn = true;
    /**
     * @var bool
     */
    protected $serviceOut = true;
    /**
     * @var bool
     */
    protected $returns = true;
    /**
     * @var bool
     */
    protected $sales = true;
    /**
     * @var bool
     */
    protected $cardPayment;
    /**
     * @var bool
     */
    protected $cashPayment;
    /**
     * @var bool
     */
    protected $otherPayment;
    /**
     * @var bool
     */
    protected $mixedPayment;
    /**
     * @var bool
     */
    protected $branchParams = true;
    /**
     * @var bool
     */
    protected $reportsHistory = true;
    /**
     * @var bool
     */
    protected $additionalServiceReceipt = false;
    /**
     * @var bool
     */
    protected $freeReturn = false;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getOrders(): bool
    {
        return $this->orders;
    }

    public function setOrders(bool $orders): self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;

        return $this;
    }

    public function getAddDiscounts(): bool
    {
        return $this->addDiscounts;
    }

    public function setAddDiscounts(bool $addDiscounts): self
    {
        $this->initialized['addDiscounts'] = true;
        $this->addDiscounts = $addDiscounts;

        return $this;
    }

    public function getEditingGoodsSum(): bool
    {
        return $this->editingGoodsSum;
    }

    public function setEditingGoodsSum(bool $editingGoodsSum): self
    {
        $this->initialized['editingGoodsSum'] = true;
        $this->editingGoodsSum = $editingGoodsSum;

        return $this;
    }

    public function getDeferredReceipt(): bool
    {
        return $this->deferredReceipt;
    }

    public function setDeferredReceipt(bool $deferredReceipt): self
    {
        $this->initialized['deferredReceipt'] = true;
        $this->deferredReceipt = $deferredReceipt;

        return $this;
    }

    public function getEditingGoodPrice(): bool
    {
        return $this->editingGoodPrice;
    }

    public function setEditingGoodPrice(bool $editingGoodPrice): self
    {
        $this->initialized['editingGoodPrice'] = true;
        $this->editingGoodPrice = $editingGoodPrice;

        return $this;
    }

    public function getCanAddManualGood(): bool
    {
        return $this->canAddManualGood;
    }

    public function setCanAddManualGood(bool $canAddManualGood): self
    {
        $this->initialized['canAddManualGood'] = true;
        $this->canAddManualGood = $canAddManualGood;

        return $this;
    }

    public function getServiceIn(): bool
    {
        return $this->serviceIn;
    }

    public function setServiceIn(bool $serviceIn): self
    {
        $this->initialized['serviceIn'] = true;
        $this->serviceIn = $serviceIn;

        return $this;
    }

    public function getServiceOut(): bool
    {
        return $this->serviceOut;
    }

    public function setServiceOut(bool $serviceOut): self
    {
        $this->initialized['serviceOut'] = true;
        $this->serviceOut = $serviceOut;

        return $this;
    }

    public function getReturns(): bool
    {
        return $this->returns;
    }

    public function setReturns(bool $returns): self
    {
        $this->initialized['returns'] = true;
        $this->returns = $returns;

        return $this;
    }

    public function getSales(): bool
    {
        return $this->sales;
    }

    public function setSales(bool $sales): self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;

        return $this;
    }

    public function getCardPayment(): ?bool
    {
        return $this->cardPayment;
    }

    public function setCardPayment(?bool $cardPayment): self
    {
        $this->initialized['cardPayment'] = true;
        $this->cardPayment = $cardPayment;

        return $this;
    }

    public function getCashPayment(): ?bool
    {
        return $this->cashPayment;
    }

    public function setCashPayment(?bool $cashPayment): self
    {
        $this->initialized['cashPayment'] = true;
        $this->cashPayment = $cashPayment;

        return $this;
    }

    public function getOtherPayment(): ?bool
    {
        return $this->otherPayment;
    }

    public function setOtherPayment(?bool $otherPayment): self
    {
        $this->initialized['otherPayment'] = true;
        $this->otherPayment = $otherPayment;

        return $this;
    }

    public function getMixedPayment(): ?bool
    {
        return $this->mixedPayment;
    }

    public function setMixedPayment(?bool $mixedPayment): self
    {
        $this->initialized['mixedPayment'] = true;
        $this->mixedPayment = $mixedPayment;

        return $this;
    }

    public function getBranchParams(): ?bool
    {
        return $this->branchParams;
    }

    public function setBranchParams(?bool $branchParams): self
    {
        $this->initialized['branchParams'] = true;
        $this->branchParams = $branchParams;

        return $this;
    }

    public function getReportsHistory(): ?bool
    {
        return $this->reportsHistory;
    }

    public function setReportsHistory(?bool $reportsHistory): self
    {
        $this->initialized['reportsHistory'] = true;
        $this->reportsHistory = $reportsHistory;

        return $this;
    }

    public function getAdditionalServiceReceipt(): ?bool
    {
        return $this->additionalServiceReceipt;
    }

    public function setAdditionalServiceReceipt(?bool $additionalServiceReceipt): self
    {
        $this->initialized['additionalServiceReceipt'] = true;
        $this->additionalServiceReceipt = $additionalServiceReceipt;

        return $this;
    }

    public function getFreeReturn(): ?bool
    {
        return $this->freeReturn;
    }

    public function setFreeReturn(?bool $freeReturn): self
    {
        $this->initialized['freeReturn'] = true;
        $this->freeReturn = $freeReturn;

        return $this;
    }
}
