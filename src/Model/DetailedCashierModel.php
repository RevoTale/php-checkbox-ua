<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;
use DateTime;

class DetailedCashierModel extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $fullName;
    /**
     * @var string
     */
    protected $nin;
    /**
     * @var string
     */
    protected $keyId;
    /**
     * An enumeration.
     *
     * @var string
     */
    protected $signatureType;
    /**
     * @var CashierPermissionsModel
     */
    protected $permissions;
    /**
     * @var DateTime
     */
    protected $createdAt;
    /**
     * @var DateTime
     */
    protected $updatedAt;
    /**
     * @var DateTime
     */
    protected $certificateEnd;
    /**
     * @var string
     */
    protected $blocked;
    /**
     * @var OrganizationModel
     */
    protected $organization;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }

    public function getNin(): string
    {
        return $this->nin;
    }

    public function setNin(string $nin): self
    {
        $this->initialized['nin'] = true;
        $this->nin = $nin;

        return $this;
    }

    public function getKeyId(): string
    {
        return $this->keyId;
    }

    public function setKeyId(string $keyId): self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;

        return $this;
    }

    /**
     * An enumeration.
     */
    public function getSignatureType(): string
    {
        return $this->signatureType;
    }

    /**
     * An enumeration.
     */
    public function setSignatureType(string $signatureType): self
    {
        $this->initialized['signatureType'] = true;
        $this->signatureType = $signatureType;

        return $this;
    }

    public function getPermissions(): CashierPermissionsModel
    {
        return $this->permissions;
    }

    public function setPermissions(CashierPermissionsModel $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCertificateEnd(): ?DateTime
    {
        return $this->certificateEnd;
    }

    public function setCertificateEnd(?DateTime $certificateEnd): self
    {
        $this->initialized['certificateEnd'] = true;
        $this->certificateEnd = $certificateEnd;

        return $this;
    }

    public function getBlocked(): string
    {
        return $this->blocked;
    }

    public function setBlocked(string $blocked): self
    {
        $this->initialized['blocked'] = true;
        $this->blocked = $blocked;

        return $this;
    }

    public function getOrganization(): OrganizationModel
    {
        return $this->organization;
    }

    public function setOrganization(OrganizationModel $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
