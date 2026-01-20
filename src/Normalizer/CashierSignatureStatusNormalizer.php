<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\CashierSignatureStatus;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class CashierSignatureStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CashierSignatureStatus' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CashierSignatureStatus;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CashierSignatureStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('online', $data)) {
            $object->setOnline($data['online']);
            unset($data['online']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('shift_open_possibility', $data)) {
            $object->setShiftOpenPossibility($data['shift_open_possibility']);
            unset($data['shift_open_possibility']);
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
        $data['online'] = $object->getOnline();
        $data['type'] = $object->getType();
        $data['shift_open_possibility'] = $object->getShiftOpenPossibility();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CashierSignatureStatus::class => false];
    }
}
