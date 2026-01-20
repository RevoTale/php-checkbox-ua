<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{CheckStatusResponseSchema, OperationErrorModel};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class CheckStatusResponseSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CheckStatusResponseSchema' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CheckStatusResponseSchema;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CheckStatusResponseSchema();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('task_id', $data)) {
            $object->setTaskId($data['task_id']);
            unset($data['task_id']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (array_key_exists('chunks_count', $data)) {
            $object->setChunksCount($data['chunks_count']);
            unset($data['chunks_count']);
        }
        if (array_key_exists('total_items', $data)) {
            $object->setTotalItems($data['total_items']);
            unset($data['total_items']);
        }
        if (array_key_exists('processed_items', $data)) {
            $object->setProcessedItems($data['processed_items']);
            unset($data['processed_items']);
        }
        if (array_key_exists('errors', $data)) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, OperationErrorModel::class, 'json', $context);
            }
            $object->setErrors($values);
            unset($data['errors']);
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
        $data['task_id'] = $object->getTaskId();
        $data['status'] = $object->getStatus();
        if ($object->isInitialized('chunksCount') && null !== $object->getChunksCount()) {
            $data['chunks_count'] = $object->getChunksCount();
        }
        if ($object->isInitialized('totalItems') && null !== $object->getTotalItems()) {
            $data['total_items'] = $object->getTotalItems();
        }
        if ($object->isInitialized('processedItems') && null !== $object->getProcessedItems()) {
            $data['processed_items'] = $object->getProcessedItems();
        }
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $values = [];
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['errors'] = $values;
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
        return [CheckStatusResponseSchema::class => false];
    }
}
