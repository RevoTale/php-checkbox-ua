<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
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

class OrderDeliveryDetailsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderDeliveryDetailsModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderDeliveryDetailsModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\OrderDeliveryDetailsModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\AddressModel', 'json', $context));
            unset($data['address']);
        }
        if (array_key_exists('box_id', $data)) {
            $values = [];
            foreach ($data['box_id'] as $value) {
                $values[] = $value;
            }
            $object->setBoxId($values);
            unset($data['box_id']);
        }
        if (array_key_exists('client_name', $data)) {
            $object->setClientName($data['client_name']);
            unset($data['client_name']);
        }
        if (array_key_exists('client_phone_number', $data)) {
            $object->setClientPhoneNumber($data['client_phone_number']);
            unset($data['client_phone_number']);
        }
        if (array_key_exists('delivery_time', $data)) {
            $object->setDeliveryTime(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['delivery_time']));
            unset($data['delivery_time']);
        }
        if (array_key_exists('client_comment', $data)) {
            $object->setClientComment($data['client_comment']);
            unset($data['client_comment']);
        }
        if (array_key_exists('thermal_dependence', $data)) {
            $object->setThermalDependence($data['thermal_dependence']);
            unset($data['thermal_dependence']);
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
        $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        $values = [];
        foreach ($object->getBoxId() as $value) {
            $values[] = $value;
        }
        $data['box_id'] = $values;
        $data['client_name'] = $object->getClientName();
        $data['client_phone_number'] = $object->getClientPhoneNumber();
        $data['delivery_time'] = $object->getDeliveryTime()->format('Y-m-d\\TH:i:s.uP');
        $data['client_comment'] = $object->getClientComment();
        $data['thermal_dependence'] = $object->getThermalDependence();
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderDeliveryDetailsModel' => false];
    }
}
