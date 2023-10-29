<?php

namespace Vendor\Library\Generated\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;
use function is_array;
use function is_int;

class DiscountModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\DiscountModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\DiscountModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\DiscountModel();
        if (array_key_exists('value', $data) && is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('mode', $data)) {
            $object->setMode($data['mode']);
            unset($data['mode']);
        }
        if (array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (array_key_exists('tax_code', $data)) {
            $object->setTaxCode($data['tax_code']);
            unset($data['tax_code']);
        }
        if (array_key_exists('tax_codes', $data)) {
            $object->setTaxCodes($data['tax_codes']);
            unset($data['tax_codes']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('privilege', $data)) {
            $object->setPrivilege($data['privilege']);
            unset($data['privilege']);
        }
        if (array_key_exists('sum', $data)) {
            $object->setSum($data['sum']);
            unset($data['sum']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['type'] = $object->getType();
        $data['mode'] = $object->getMode();
        $data['value'] = $object->getValue();
        if ($object->isInitialized('taxCode') && null !== $object->getTaxCode()) {
            $data['tax_code'] = $object->getTaxCode();
        }
        if ($object->isInitialized('taxCodes') && null !== $object->getTaxCodes()) {
            $data['tax_codes'] = $object->getTaxCodes();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('privilege') && null !== $object->getPrivilege()) {
            $data['privilege'] = $object->getPrivilege();
        }
        $data['sum'] = $object->getSum();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\DiscountModel' => false];
    }
}
