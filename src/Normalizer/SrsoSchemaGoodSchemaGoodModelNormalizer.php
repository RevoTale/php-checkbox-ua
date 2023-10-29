<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use RevoTale\CheckboxUA\Model\SrsoSchemaGoodSchemaGoodModel;
use RevoTale\CheckboxUA\Model\GoodModelBase;
use RevoTale\CheckboxUA\Model\TaxModel;

class SrsoSchemaGoodSchemaGoodModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\SrsoSchemaGoodSchemaGoodModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\SrsoSchemaGoodSchemaGoodModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\SrsoSchemaGoodSchemaGoodModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        if (array_key_exists('uktzed', $data)) {
            $object->setUktzed($data['uktzed']);
            unset($data['uktzed']);
        }
        if (array_key_exists('taxes', $data)) {
            $values = [];
            foreach ($data['taxes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, TaxModel::class, 'json', $context);
            }
            $object->setTaxes($values);
            unset($data['taxes']);
        }
        if (array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (array_key_exists('image_url', $data)) {
            $object->setImageUrl($data['image_url']);
            unset($data['image_url']);
        }
        if (array_key_exists('is_weight', $data)) {
            $object->setIsWeight($data['is_weight']);
            unset($data['is_weight']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('children', $data)) {
            $values_1 = [];
            foreach ($data['children'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, GoodModelBase::class, 'json', $context);
            }
            $object->setChildren($values_1);
            unset($data['children']);
        }
        if (array_key_exists('related_barcodes', $data)) {
            $object->setRelatedBarcodes($data['related_barcodes']);
            unset($data['related_barcodes']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['id'] = $object->getId();
        $data['code'] = $object->getCode();
        $data['name'] = $object->getName();
        $data['price'] = $object->getPrice();
        if ($object->isInitialized('barcode') && null !== $object->getBarcode()) {
            $data['barcode'] = $object->getBarcode();
        }
        if ($object->isInitialized('uktzed') && null !== $object->getUktzed()) {
            $data['uktzed'] = $object->getUktzed();
        }
        $values = [];
        foreach ($object->getTaxes() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['taxes'] = $values;
        if ($object->isInitialized('count') && null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
            $data['image_url'] = $object->getImageUrl();
        }
        if ($object->isInitialized('isWeight') && null !== $object->getIsWeight()) {
            $data['is_weight'] = $object->getIsWeight();
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('children') && null !== $object->getChildren()) {
            $values_1 = [];
            foreach ($object->getChildren() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['children'] = $values_1;
        }
        if ($object->isInitialized('relatedBarcodes') && null !== $object->getRelatedBarcodes()) {
            $data['related_barcodes'] = $object->getRelatedBarcodes();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [SrsoSchemaGoodSchemaGoodModel::class => false];
    }
}
