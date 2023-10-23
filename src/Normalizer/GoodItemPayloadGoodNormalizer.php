<?php

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use RevoTale\CheckboxUA\Runtime\Normalizer\CheckArray;
use RevoTale\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;
use function is_array;

class GoodItemPayloadGoodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\GoodItemPayloadGood' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\GoodItemPayloadGood' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\GoodItemPayloadGood();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        if (array_key_exists('excise_barcode', $data)) {
            $object->setExciseBarcode($data['excise_barcode']);
            unset($data['excise_barcode']);
        }
        if (array_key_exists('excise_barcodes', $data)) {
            $values = [];
            foreach ($data['excise_barcodes'] as $value) {
                $values[] = $value;
            }
            $object->setExciseBarcodes($values);
            unset($data['excise_barcodes']);
        }
        if (array_key_exists('header', $data)) {
            $object->setHeader($data['header']);
            unset($data['header']);
        }
        if (array_key_exists('footer', $data)) {
            $object->setFooter($data['footer']);
            unset($data['footer']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (array_key_exists('tax', $data)) {
            $object->setTax($data['tax']);
            unset($data['tax']);
        }
        if (array_key_exists('uktzed', $data)) {
            $object->setUktzed($data['uktzed']);
            unset($data['uktzed']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['code'] = $object->getCode();
        $data['name'] = $object->getName();
        if ($object->isInitialized('barcode') && null !== $object->getBarcode()) {
            $data['barcode'] = $object->getBarcode();
        }
        if ($object->isInitialized('exciseBarcode') && null !== $object->getExciseBarcode()) {
            $data['excise_barcode'] = $object->getExciseBarcode();
        }
        if ($object->isInitialized('exciseBarcodes') && null !== $object->getExciseBarcodes()) {
            $values = [];
            foreach ($object->getExciseBarcodes() as $value) {
                $values[] = $value;
            }
            $data['excise_barcodes'] = $values;
        }
        if ($object->isInitialized('header') && null !== $object->getHeader()) {
            $data['header'] = $object->getHeader();
        }
        if ($object->isInitialized('footer') && null !== $object->getFooter()) {
            $data['footer'] = $object->getFooter();
        }
        $data['price'] = $object->getPrice();
        if ($object->isInitialized('tax') && null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if ($object->isInitialized('uktzed') && null !== $object->getUktzed()) {
            $data['uktzed'] = $object->getUktzed();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\GoodItemPayloadGood' => false];
    }
}
