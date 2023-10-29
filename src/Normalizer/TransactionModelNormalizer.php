<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Vendor\Library\Generated\CheckboxUA\Model\TransactionModel;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;
use function is_array;

class TransactionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\TransactionModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\TransactionModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new TransactionModel();
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
            $object->setOfflineId(null === $data['offline_id'] ? null : $data['offline_id']); // Manualy fixed nullability
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
            $object->setOriginalDatetime(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['original_datetime']));
            unset($data['original_datetime']);
        }
        if (array_key_exists('previous_hash', $data)) {
            $object->setPreviousHash($data['previous_hash']);
            unset($data['previous_hash']);
        }
        if (array_key_exists('request_data', $data)) {
            $object->setRequestData($data['request_data']);
            unset($data['request_data']);
        }
        if (array_key_exists('request_signature', $data)) {
            $object->setRequestSignature($data['request_signature']);
            unset($data['request_signature']);
        }
        if (array_key_exists('response_id_signature', $data)) {
            $object->setResponseIdSignature($data['response_id_signature']);
            unset($data['response_id_signature']);
        }
        if (array_key_exists('response_data_signature', $data)) {
            $object->setResponseDataSignature($data['response_data_signature']);
            unset($data['response_data_signature']);
        }
        if (array_key_exists('response_data', $data)) {
            $object->setResponseData($data['response_data']);
            unset($data['response_data']);
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
        if ($object->isInitialized('requestData') && null !== $object->getRequestData()) {
            $data['request_data'] = $object->getRequestData();
        }
        if ($object->isInitialized('requestSignature') && null !== $object->getRequestSignature()) {
            $data['request_signature'] = $object->getRequestSignature();
        }
        if ($object->isInitialized('responseIdSignature') && null !== $object->getResponseIdSignature()) {
            $data['response_id_signature'] = $object->getResponseIdSignature();
        }
        if ($object->isInitialized('responseDataSignature') && null !== $object->getResponseDataSignature()) {
            $data['response_data_signature'] = $object->getResponseDataSignature();
        }
        if ($object->isInitialized('responseData') && null !== $object->getResponseData()) {
            $data['response_data'] = $object->getResponseData();
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\TransactionModel' => false];
    }
}
