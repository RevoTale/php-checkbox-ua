<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class CurrencyExchangePayload extends ArrayObject
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
    protected $id;
    /**
     * @var CurrencyPayload
     */
    protected $sell;
    /**
     * @var CurrencyPayload
     */
    protected $buy;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $reversal = false;
    /**
     * @var string
     */
    protected $clientInfo;
    /**
     * @var string
     */
    protected $header;
    /**
     * @var string
     */
    protected $footer;
    /**
     * @var float
     */
    protected $commission;
    /**
     * @var DeliveryPayload
     */
    protected $delivery;
    /**
     * @var string
     */
    protected $fiscalCode;
    /**
     * @var DateTime
     */
    protected $fiscalDate;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getSell(): CurrencyPayload
    {
        return $this->sell;
    }

    public function setSell(CurrencyPayload $sell): self
    {
        $this->initialized['sell'] = true;
        $this->sell = $sell;

        return $this;
    }

    public function getBuy(): CurrencyPayload
    {
        return $this->buy;
    }

    public function setBuy(CurrencyPayload $buy): self
    {
        $this->initialized['buy'] = true;
        $this->buy = $buy;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * An enumeration.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getReversal(): bool
    {
        return $this->reversal;
    }

    public function setReversal(bool $reversal): self
    {
        $this->initialized['reversal'] = true;
        $this->reversal = $reversal;

        return $this;
    }

    public function getClientInfo(): string
    {
        return $this->clientInfo;
    }

    public function setClientInfo(string $clientInfo): self
    {
        $this->initialized['clientInfo'] = true;
        $this->clientInfo = $clientInfo;

        return $this;
    }

    public function getHeader(): string
    {
        return $this->header;
    }

    public function setHeader(string $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;

        return $this;
    }

    public function getFooter(): string
    {
        return $this->footer;
    }

    public function setFooter(string $footer): self
    {
        $this->initialized['footer'] = true;
        $this->footer = $footer;

        return $this;
    }

    public function getCommission(): float
    {
        return $this->commission;
    }

    public function setCommission(float $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

        return $this;
    }

    public function getDelivery(): DeliveryPayload
    {
        return $this->delivery;
    }

    public function setDelivery(DeliveryPayload $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    public function getFiscalCode(): string
    {
        return $this->fiscalCode;
    }

    public function setFiscalCode(string $fiscalCode): self
    {
        $this->initialized['fiscalCode'] = true;
        $this->fiscalCode = $fiscalCode;

        return $this;
    }

    public function getFiscalDate(): DateTime
    {
        return $this->fiscalDate;
    }

    public function setFiscalDate(DateTime $fiscalDate): self
    {
        $this->initialized['fiscalDate'] = true;
        $this->fiscalDate = $fiscalDate;

        return $this;
    }
}
