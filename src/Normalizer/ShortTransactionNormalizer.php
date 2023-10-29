<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\ShortTransaction;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class ShortTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ShortTransaction' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ShortTransaction' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ShortTransaction();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
            unset($data['serial']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (array_key_exists('request_signed_at', $data)) {
            $object->setRequestSignedAt(null === $data['request_signed_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['request_signed_at']));
            unset($data['request_signed_at']);
        }
        if (array_key_exists('request_received_at', $data)) {
            $object->setRequestReceivedAt(null === $data['request_received_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['request_received_at']));
            unset($data['request_received_at']);
        }
        if (array_key_exists('response_status', $data)) {
            $object->setResponseStatus($data['response_status']);
            unset($data['response_status']);
        }
        if (array_key_exists('response_error_message', $data)) {
            $object->setResponseErrorMessage(null === $data['response_error_message'] ? null : $data['response_error_message']);
            unset($data['response_error_message']);
        }
        if (array_key_exists('response_id', $data)) {
            $object->setResponseId($data['response_id']);
            unset($data['response_id']);
        }
        if (array_key_exists('offline_id', $data)) {
            $object->setOfflineId($data['offline_id']); // Manualy fixed nullability
            unset($data['offline_id']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('original_datetime', $data)) {
            $object->setOriginalDatetime(null === $data['original_datetime'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['original_datetime']));
            unset($data['original_datetime']);
        }
        if (array_key_exists('previous_hash', $data)) {
            $object->setPreviousHash($data['previous_hash']);
            unset($data['previous_hash']);
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
        $data['type'] = $object->getType();
        $data['serial'] = $object->getSerial();
        $data['status'] = $object->getStatus();
        if ($object->isInitialized('requestSignedAt') && null !== $object->getRequestSignedAt()) {
            $data['request_signed_at'] = $object->getRequestSignedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('requestReceivedAt') && null !== $object->getRequestReceivedAt()) {
            $data['request_received_at'] = $object->getRequestReceivedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('responseStatus') && null !== $object->getResponseStatus()) {
            $data['response_status'] = $object->getResponseStatus();
        }
        if ($object->isInitialized('responseErrorMessage') && null !== $object->getResponseErrorMessage()) {
            $data['response_error_message'] = $object->getResponseErrorMessage();
        }
        if ($object->isInitialized('responseId') && null !== $object->getResponseId()) {
            $data['response_id'] = $object->getResponseId();
        }
        if ($object->isInitialized('offlineId') && null !== $object->getOfflineId()) {
            $data['offline_id'] = $object->getOfflineId();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('originalDatetime') && null !== $object->getOriginalDatetime()) {
            $data['original_datetime'] = $object->getOriginalDatetime()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('previousHash') && null !== $object->getPreviousHash()) {
            $data['previous_hash'] = $object->getPreviousHash();
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\ShortTransaction' => false];
    }
}
