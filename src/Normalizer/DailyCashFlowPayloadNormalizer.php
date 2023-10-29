<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\DailyCashFlowPayload;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class DailyCashFlowPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\DailyCashFlowPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\DailyCashFlowPayload;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\DailyCashFlowPayload();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('from_date', $data)) {
            $object->setFromDate(DateTime::createFromFormat('Y-m-d', $data['from_date'])->setTime(0, 0, 0));
            unset($data['from_date']);
        }
        if (array_key_exists('organization_id', $data)) {
            $values = [];
            foreach ($data['organization_id'] as $value) {
                $values[] = $value;
            }
            $object->setOrganizationId($values);
            unset($data['organization_id']);
        }
        if (array_key_exists('emails', $data)) {
            $values_1 = [];
            foreach ($data['emails'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEmails($values_1);
            unset($data['emails']);
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
        $data['from_date'] = $object->getFromDate()->format('Y-m-d');
        $values = [];
        foreach ($object->getOrganizationId() as $value) {
            $values[] = $value;
        }
        $data['organization_id'] = $values;
        if ($object->isInitialized('emails') && null !== $object->getEmails()) {
            $values_1 = [];
            foreach ($object->getEmails() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['emails'] = $values_1;
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
        return [DailyCashFlowPayload::class => false];
    }
}
