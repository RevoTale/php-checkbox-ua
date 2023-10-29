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

class OrderGoodItemModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderGoodItemModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderGoodItemModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\OrderGoodItemModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('good', $data)) {
            $object->setGood($this->denormalizer->denormalize($data['good'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderGoodItemModelGood', 'json', $context));
            unset($data['good']);
        }
        if (array_key_exists('good_id', $data)) {
            $object->setGoodId($data['good_id']);
            unset($data['good_id']);
        }
        if (array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (array_key_exists('is_return', $data)) {
            $object->setIsReturn($data['is_return']);
            unset($data['is_return']);
        }
        if (array_key_exists('discounts', $data)) {
            $values = [];
            foreach ($data['discounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\DiscountPayload', 'json', $context);
            }
            $object->setDiscounts($values);
            unset($data['discounts']);
        }
        if (array_key_exists('total_sum', $data)) {
            $object->setTotalSum($data['total_sum']);
            unset($data['total_sum']);
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
        if ($object->isInitialized('good') && null !== $object->getGood()) {
            $data['good'] = $this->normalizer->normalize($object->getGood(), 'json', $context);
        }
        if ($object->isInitialized('goodId') && null !== $object->getGoodId()) {
            $data['good_id'] = $object->getGoodId();
        }
        $data['quantity'] = $object->getQuantity();
        if ($object->isInitialized('isReturn') && null !== $object->getIsReturn()) {
            $data['is_return'] = $object->getIsReturn();
        }
        if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
            $values = [];
            foreach ($object->getDiscounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['discounts'] = $values;
        }
        if ($object->isInitialized('totalSum') && null !== $object->getTotalSum()) {
            $data['total_sum'] = $object->getTotalSum();
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderGoodItemModel' => false];
    }
}
