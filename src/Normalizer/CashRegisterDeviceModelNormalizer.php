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

class CashRegisterDeviceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterDeviceModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterDeviceModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\CashRegisterDeviceModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
            unset($data['organization_id']);
        }
        if (array_key_exists('fiscal_number', $data)) {
            $object->setFiscalNumber($data['fiscal_number']);
            unset($data['fiscal_number']);
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
        if (array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
            unset($data['address']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (array_key_exists('offline_mode', $data)) {
            $object->setOfflineMode($data['offline_mode']);
            unset($data['offline_mode']);
        }
        if (array_key_exists('stay_offline', $data)) {
            $object->setStayOffline($data['stay_offline']);
            unset($data['stay_offline']);
        }
        if (array_key_exists('has_shift', $data)) {
            $object->setHasShift($data['has_shift']);
            unset($data['has_shift']);
        }
        if (array_key_exists('documents_state', $data)) {
            $object->setDocumentsState($this->denormalizer->denormalize($data['documents_state'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\DocumentsStateModel', 'json', $context));
            unset($data['documents_state']);
        }
        if (array_key_exists('emergency_date', $data)) {
            $object->setEmergencyDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['emergency_date']));
            unset($data['emergency_date']);
        }
        if (array_key_exists('emergency_details', $data)) {
            $object->setEmergencyDetails($data['emergency_details']);
            unset($data['emergency_details']);
        }
        if (array_key_exists('is_test', $data)) {
            $object->setIsTest($data['is_test']);
            unset($data['is_test']);
        }
        if (array_key_exists('has_monobank_terminal', $data)) {
            $object->setHasMonobankTerminal($data['has_monobank_terminal']);
            unset($data['has_monobank_terminal']);
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
        $data['organization_id'] = $object->getOrganizationId();
        $data['fiscal_number'] = $object->getFiscalNumber();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        $data['address'] = $object->getAddress();
        $data['title'] = $object->getTitle();
        $data['offline_mode'] = $object->getOfflineMode();
        $data['stay_offline'] = $object->getStayOffline();
        $data['has_shift'] = $object->getHasShift();
        $data['documents_state'] = $this->normalizer->normalize($object->getDocumentsState(), 'json', $context);
        if ($object->isInitialized('emergencyDate') && null !== $object->getEmergencyDate()) {
            $data['emergency_date'] = $object->getEmergencyDate()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('emergencyDetails') && null !== $object->getEmergencyDetails()) {
            $data['emergency_details'] = $object->getEmergencyDetails();
        }
        $data['is_test'] = $object->getIsTest();
        if ($object->isInitialized('hasMonobankTerminal') && null !== $object->getHasMonobankTerminal()) {
            $data['has_monobank_terminal'] = $object->getHasMonobankTerminal();
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterDeviceModel' => false];
    }
}
