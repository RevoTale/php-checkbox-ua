<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\CurrencyPayload;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use function is_int;

class CurrencyPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CurrencyPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CurrencyPayload;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CurrencyPayload();
        if (array_key_exists('value', $data) && is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        if (array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
    {
        $data = [];
        $data['currency'] = $object->getCurrency();
        if ($object->isInitialized('value') && null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CurrencyPayload::class => false];
    }
}
