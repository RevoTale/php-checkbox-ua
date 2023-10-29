<?php

namespace Vendor\Library\Generated\CheckboxUA\Model;

use ArrayObject;

class BodyImportGoodsFromFileApiV1GoodsImportUploadPost extends ArrayObject
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
    protected $file;

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;

        return $this;
    }
}
