<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\AddressModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class AddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\AddressModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\AddressModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\AddressModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('address_type', $data)) {
            $object->setAddressType($data['address_type']);
            unset($data['address_type']);
        }
        if (array_key_exists('street', $data)) {
            $object->setStreet($data['street']);
            unset($data['street']);
        }
        if (array_key_exists('entrance', $data)) {
            $object->setEntrance($data['entrance']);
            unset($data['entrance']);
        }
        if (array_key_exists('floor', $data)) {
            $object->setFloor($data['floor']);
            unset($data['floor']);
        }
        if (array_key_exists('apartment_number', $data)) {
            $object->setApartmentNumber($data['apartment_number']);
            unset($data['apartment_number']);
        }
        if (array_key_exists('elevator', $data)) {
            $object->setElevator($data['elevator']);
            unset($data['elevator']);
        }
        if (array_key_exists('intercom', $data)) {
            $object->setIntercom($data['intercom']);
            unset($data['intercom']);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['address_type'] = $object->getAddressType();
        $data['street'] = $object->getStreet();
        if ($object->isInitialized('entrance') && null !== $object->getEntrance()) {
            $data['entrance'] = $object->getEntrance();
        }
        if ($object->isInitialized('floor') && null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if ($object->isInitialized('apartmentNumber') && null !== $object->getApartmentNumber()) {
            $data['apartment_number'] = $object->getApartmentNumber();
        }
        if ($object->isInitialized('elevator') && null !== $object->getElevator()) {
            $data['elevator'] = $object->getElevator();
        }
        if ($object->isInitialized('intercom') && null !== $object->getIntercom()) {
            $data['intercom'] = $object->getIntercom();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [AddressModel::class => false];
    }
}
