<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\OrganizationModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class OrganizationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\OrganizationModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof OrganizationModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new OrganizationModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (array_key_exists('edrpou', $data)) {
            $object->setEdrpou($data['edrpou']);
            unset($data['edrpou']);
        }
        if (array_key_exists('tax_number', $data)) {
            $object->setTaxNumber($data['tax_number']);
            unset($data['tax_number']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('subscription_exp', $data)) {
            $object->setSubscriptionExp(DateTime::createFromFormat('Y-m-d', $data['subscription_exp'])->setTime(0, 0, 0));
            unset($data['subscription_exp']);
        }
        if (array_key_exists('receipts_ratelimit_count', $data)) {
            $object->setReceiptsRatelimitCount($data['receipts_ratelimit_count']);
            unset($data['receipts_ratelimit_count']);
        }
        if (array_key_exists('receipts_ratelimit_interval', $data)) {
            $object->setReceiptsRatelimitInterval($data['receipts_ratelimit_interval']);
            unset($data['receipts_ratelimit_interval']);
        }
        if (array_key_exists('can_send_sms', $data)) {
            $object->setCanSendSms($data['can_send_sms']);
            unset($data['can_send_sms']);
        }
        if (array_key_exists('use_seamless_mode', $data)) {
            $object->setUseSeamlessMode($data['use_seamless_mode']);
            unset($data['use_seamless_mode']);
        }
        if (array_key_exists('allowed_offline_duration', $data)) {
            $object->setAllowedOfflineDuration($data['allowed_offline_duration']);
            unset($data['allowed_offline_duration']);
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
        $data['id'] = $object->getId();
        $data['title'] = $object->getTitle();
        $data['edrpou'] = $object->getEdrpou();
        $data['tax_number'] = $object->getTaxNumber();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('subscriptionExp') && null !== $object->getSubscriptionExp()) {
            $data['subscription_exp'] = $object->getSubscriptionExp()->format('Y-m-d');
        }
        if ($object->isInitialized('receiptsRatelimitCount') && null !== $object->getReceiptsRatelimitCount()) {
            $data['receipts_ratelimit_count'] = $object->getReceiptsRatelimitCount();
        }
        if ($object->isInitialized('receiptsRatelimitInterval') && null !== $object->getReceiptsRatelimitInterval()) {
            $data['receipts_ratelimit_interval'] = $object->getReceiptsRatelimitInterval();
        }
        if ($object->isInitialized('canSendSms') && null !== $object->getCanSendSms()) {
            $data['can_send_sms'] = $object->getCanSendSms();
        }
        if ($object->isInitialized('useSeamlessMode') && null !== $object->getUseSeamlessMode()) {
            $data['use_seamless_mode'] = $object->getUseSeamlessMode();
        }
        if ($object->isInitialized('allowedOfflineDuration') && null !== $object->getAllowedOfflineDuration()) {
            $data['allowed_offline_duration'] = $object->getAllowedOfflineDuration();
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
        return [OrganizationModel::class => false];
    }
}
