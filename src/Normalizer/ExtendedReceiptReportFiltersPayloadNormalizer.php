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
use RevoTale\CheckboxUA\Model\ExtendedReceiptReportFiltersPayload;

class ExtendedReceiptReportFiltersPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ExtendedReceiptReportFiltersPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\ExtendedReceiptReportFiltersPayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ExtendedReceiptReportFiltersPayload();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('from_date', $data)) {
            $object->setFromDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['from_date']));
            unset($data['from_date']);
        }
        if (array_key_exists('to_date', $data)) {
            $object->setToDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['to_date']));
            unset($data['to_date']);
        }
        if (array_key_exists('branch_id', $data)) {
            $object->setBranchId($data['branch_id']);
            unset($data['branch_id']);
        }
        if (array_key_exists('cash_register_id', $data)) {
            $object->setCashRegisterId($data['cash_register_id']);
            unset($data['cash_register_id']);
        }
        if (array_key_exists('emails', $data)) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $value;
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
            unset($data['organization_id']);
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
        $data['from_date'] = $object->getFromDate()->format('Y-m-d\\TH:i:s.uP');
        $data['to_date'] = $object->getToDate()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('branchId') && null !== $object->getBranchId()) {
            $data['branch_id'] = $object->getBranchId();
        }
        if ($object->isInitialized('cashRegisterId') && null !== $object->getCashRegisterId()) {
            $data['cash_register_id'] = $object->getCashRegisterId();
        }
        if ($object->isInitialized('emails') && null !== $object->getEmails()) {
            $values = [];
            foreach ($object->getEmails() as $value) {
                $values[] = $value;
            }
            $data['emails'] = $values;
        }
        $data['organization_id'] = $object->getOrganizationId();
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [ExtendedReceiptReportFiltersPayload::class => false];
    }
}
