<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Model;

use ArrayObject;

class CardPaymentPayload extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $type = 'CASHLESS';
    /**
     * @var bool
     */
    protected $pawnshopIsReturn;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $providerType;
    /**
     * @var int
     */
    protected $code;
    /**
     * @var int
     */
    protected $value;
    /**
     * @var int
     */
    protected $commission;
    /**
     * @var string
     */
    protected $label = 'Картка';
    /**
     * @var string
     */
    protected $cardMask;
    /**
     * @var string
     */
    protected $bankName;
    /**
     * @var string
     */
    protected $authCode;
    /**
     * @var string
     */
    protected $rrn;
    /**
     * @var string
     */
    protected $paymentSystem;
    /**
     * @var string
     */
    protected $ownerName;
    /**
     * @var string
     */
    protected $terminal;
    /**
     * @deprecated
     *
     * @var string
     */
    protected $acquiring;
    /**
     * @var string
     */
    protected $acquirerAndSeller;
    /**
     * @var string
     */
    protected $receiptNo;
    /**
     * @var bool
     */
    protected $signatureRequired;
    /**
     * @var string
     */
    protected $tapxphoneTerminal;

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

    public function getPawnshopIsReturn(): ?bool
    {
        return $this->pawnshopIsReturn;
    }

    public function setPawnshopIsReturn(?bool $pawnshopIsReturn): self
    {
        $this->initialized['pawnshopIsReturn'] = true;
        $this->pawnshopIsReturn = $pawnshopIsReturn;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getProviderType(): ?string
    {
        return $this->providerType;
    }

    /**
     * An enumeration.
     */
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

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    public function getCommission(): int
    {
        return $this->commission;
    }

    public function setCommission(int $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

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

    public function getCardMask(): string
    {
        return $this->cardMask;
    }

    public function setCardMask(string $cardMask): self
    {
        $this->initialized['cardMask'] = true;
        $this->cardMask = $cardMask;

        return $this;
    }

    public function getBankName(): string
    {
        return $this->bankName;
    }

    public function setBankName(string $bankName): self
    {
        $this->initialized['bankName'] = true;
        $this->bankName = $bankName;

        return $this;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;

        return $this;
    }

    public function getRrn(): string
    {
        return $this->rrn;
    }

    public function setRrn(string $rrn): self
    {
        $this->initialized['rrn'] = true;
        $this->rrn = $rrn;

        return $this;
    }

    public function getPaymentSystem(): string
    {
        return $this->paymentSystem;
    }

    public function setPaymentSystem(string $paymentSystem): self
    {
        $this->initialized['paymentSystem'] = true;
        $this->paymentSystem = $paymentSystem;

        return $this;
    }

    public function getOwnerName(): string
    {
        return $this->ownerName;
    }

    public function setOwnerName(string $ownerName): self
    {
        $this->initialized['ownerName'] = true;
        $this->ownerName = $ownerName;

        return $this;
    }

    public function getTerminal(): string
    {
        return $this->terminal;
    }

    public function setTerminal(string $terminal): self
    {
        $this->initialized['terminal'] = true;
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getAcquiring(): string
    {
        return $this->acquiring;
    }

    /**
     * @deprecated
     */
    public function setAcquiring(string $acquiring): self
    {
        $this->initialized['acquiring'] = true;
        $this->acquiring = $acquiring;

        return $this;
    }

    public function getAcquirerAndSeller(): string
    {
        return $this->acquirerAndSeller;
    }

    public function setAcquirerAndSeller(string $acquirerAndSeller): self
    {
        $this->initialized['acquirerAndSeller'] = true;
        $this->acquirerAndSeller = $acquirerAndSeller;

        return $this;
    }

    public function getReceiptNo(): string
    {
        return $this->receiptNo;
    }

    public function setReceiptNo(string $receiptNo): self
    {
        $this->initialized['receiptNo'] = true;
        $this->receiptNo = $receiptNo;

        return $this;
    }

    public function getSignatureRequired(): bool
    {
        return $this->signatureRequired;
    }

    public function setSignatureRequired(bool $signatureRequired): self
    {
        $this->initialized['signatureRequired'] = true;
        $this->signatureRequired = $signatureRequired;

        return $this;
    }

    public function getTapxphoneTerminal(): string
    {
        return $this->tapxphoneTerminal;
    }

    public function setTapxphoneTerminal(string $tapxphoneTerminal): self
    {
        $this->initialized['tapxphoneTerminal'] = true;
        $this->tapxphoneTerminal = $tapxphoneTerminal;

        return $this;
    }
}
