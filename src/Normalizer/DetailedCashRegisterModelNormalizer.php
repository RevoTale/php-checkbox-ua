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
use RevoTale\CheckboxUA\Model\DetailedCashRegisterModel;
use RevoTale\CheckboxUA\Model\BranchModel;
use RevoTale\CheckboxUA\Model\ShiftWithCashierModel;

class DetailedCashRegisterModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\DetailedCashRegisterModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\DetailedCashRegisterModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\DetailedCashRegisterModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('fiscal_number', $data)) {
            $object->setFiscalNumber($data['fiscal_number']);
            unset($data['fiscal_number']);
        }
        if (array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (array_key_exists('shift', $data)) {
            $object->setShift($this->denormalizer->denormalize($data['shift'], ShiftWithCashierModel::class, 'json', $context));
            unset($data['shift']);
        }
        if (array_key_exists('offline_mode', $data)) {
            $object->setOfflineMode($data['offline_mode']);
            unset($data['offline_mode']);
        }
        if (array_key_exists('stay_offline', $data)) {
            $object->setStayOffline($data['stay_offline']);
            unset($data['stay_offline']);
        }
        if (array_key_exists('branch', $data)) {
            $object->setBranch($this->denormalizer->denormalize($data['branch'], BranchModel::class, 'json', $context));
            unset($data['branch']);
        }
        if (array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
            unset($data['address']);
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
        $data['id'] = $object->getId();
        $data['fiscal_number'] = $object->getFiscalNumber();
        $data['active'] = $object->getActive();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if ($object->isInitialized('shift') && null !== $object->getShift()) {
            $data['shift'] = $this->normalizer->normalize($object->getShift(), 'json', $context);
        }
        if ($object->isInitialized('offlineMode') && null !== $object->getOfflineMode()) {
            $data['offline_mode'] = $object->getOfflineMode();
        }
        if ($object->isInitialized('stayOffline') && null !== $object->getStayOffline()) {
            $data['stay_offline'] = $object->getStayOffline();
        }
        if ($object->isInitialized('branch') && null !== $object->getBranch()) {
            $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
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
        return [DetailedCashRegisterModel::class => false];
    }
}
