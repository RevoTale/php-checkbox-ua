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

class CalculatedGoodItemPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CalculatedGoodItemPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CalculatedGoodItemPayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\CalculatedGoodItemPayload();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('good', $data)) {
            $object->setGood($this->denormalizer->denormalize($data['good'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CalculatedGoodDetailsPayload', 'json', $context));
            unset($data['good']);
        }
        if (array_key_exists('good_id', $data)) {
            $object->setGoodId($data['good_id']);
            unset($data['good_id']);
        }
        if (array_key_exists('sum', $data)) {
            $object->setSum($data['sum']);
            unset($data['sum']);
        }
        if (array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (array_key_exists('is_return', $data)) {
            $object->setIsReturn($data['is_return']);
            unset($data['is_return']);
        }
        if (array_key_exists('is_winnings_payout', $data)) {
            $object->setIsWinningsPayout($data['is_winnings_payout']);
            unset($data['is_winnings_payout']);
        }
        if (array_key_exists('taxes', $data)) {
            $values = [];
            foreach ($data['taxes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CalculatedGoodTaxPayload', 'json', $context);
            }
            $object->setTaxes($values);
            unset($data['taxes']);
        }
        if (array_key_exists('discounts', $data)) {
            $values_1 = [];
            foreach ($data['discounts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CalculatedDiscountPayload', 'json', $context);
            }
            $object->setDiscounts($values_1);
            unset($data['discounts']);
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
        $data['good'] = $this->normalizer->normalize($object->getGood(), 'json', $context);
        if ($object->isInitialized('goodId') && null !== $object->getGoodId()) {
            $data['good_id'] = $object->getGoodId();
        }
        $data['sum'] = $object->getSum();
        $data['quantity'] = $object->getQuantity();
        if ($object->isInitialized('isReturn') && null !== $object->getIsReturn()) {
            $data['is_return'] = $object->getIsReturn();
        }
        if ($object->isInitialized('isWinningsPayout') && null !== $object->getIsWinningsPayout()) {
            $data['is_winnings_payout'] = $object->getIsWinningsPayout();
        }
        $values = [];
        foreach ($object->getTaxes() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['taxes'] = $values;
        if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
            $values_1 = [];
            foreach ($object->getDiscounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['discounts'] = $values_1;
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\CalculatedGoodItemPayload' => false];
    }
}
