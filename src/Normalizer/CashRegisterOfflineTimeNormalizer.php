<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{CashRegisterOfflineTime, CashRegisterOfflineTimeSession, CashRegisterOfflineTimeStatus};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class CashRegisterOfflineTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CashRegisterOfflineTime' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CashRegisterOfflineTime;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CashRegisterOfflineTime();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], CashRegisterOfflineTimeStatus::class, 'json', $context));
            unset($data['status']);
        }
        if (array_key_exists('sessions', $data)) {
            $values = [];
            foreach ($data['sessions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CashRegisterOfflineTimeSession::class, 'json', $context);
            }
            $object->setSessions($values);
            unset($data['sessions']);
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
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('sessions') && null !== $object->getSessions()) {
            $values = [];
            foreach ($object->getSessions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sessions'] = $values;
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
        return [CashRegisterOfflineTime::class => false];
    }
}
