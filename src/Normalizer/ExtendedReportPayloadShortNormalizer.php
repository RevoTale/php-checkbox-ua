<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\ExtendedReportPayloadShort;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class ExtendedReportPayloadShortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ExtendedReportPayloadShort' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof ExtendedReportPayloadShort;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ExtendedReportPayloadShort();
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
        if (array_key_exists('mode', $data)) {
            $object->setMode($data['mode']);
            unset($data['mode']);
        }
        if (array_key_exists('emails', $data)) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $value;
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
    {
        $data = [];
        $data['from_date'] = $object->getFromDate()->format('Y-m-d\\TH:i:s.uP');
        $data['to_date'] = $object->getToDate()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('mode') && null !== $object->getMode()) {
            $data['mode'] = $object->getMode();
        }
        if ($object->isInitialized('emails') && null !== $object->getEmails()) {
            $values = [];
            foreach ($object->getEmails() as $value) {
                $values[] = $value;
            }
            $data['emails'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExtendedReportPayloadShort::class => false];
    }
}
