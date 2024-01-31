<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{AddressModel, OrderDeliveryDetailsModel};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

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
        return 'RevoTale\\CheckboxUA\\Model\\OrderDeliveryDetailsModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\OrderDeliveryDetailsModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setAddress($this->denormalizer->denormalize($data['address'], AddressModel::class, 'json', $context));
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
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
        return [OrderDeliveryDetailsModel::class => false];
    }
}
