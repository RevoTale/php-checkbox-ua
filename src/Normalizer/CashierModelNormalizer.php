<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{CashierModel, CashierPermissionsModel};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class CashierModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CashierModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\CashierModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CashierModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
            unset($data['full_name']);
        }
        if (array_key_exists('nin', $data)) {
            $object->setNin($data['nin']);
            unset($data['nin']);
        }
        if (array_key_exists('key_id', $data)) {
            $object->setKeyId($data['key_id']);
            unset($data['key_id']);
        }
        if (array_key_exists('signature_type', $data)) {
            $object->setSignatureType($data['signature_type']);
            unset($data['signature_type']);
        }
        if (array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], CashierPermissionsModel::class, 'json', $context));
            unset($data['permissions']);
        }
        if (array_key_exists('created_at', $data)) {
            $createdAt = DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']);
            $object->setCreatedAt($createdAt === false? new DateTime() :$createdAt);
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $updatedAt = null;
            if ($data['updated_at'] !== null) {
                $updatedAt = DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']);
                if ($updatedAt === false) {
                    $updatedAt = null;
                }
            }
            $object->setUpdatedAt($updatedAt);
            unset($data['updated_at']);
        }
        if (array_key_exists('certificate_end', $data)) {
            $object->setCertificateEnd(null === $data['certificate_end'] ? null : new DateTime($data['certificate_end']));
            unset($data['certificate_end']);
        }
        if (array_key_exists('blocked', $data)) {
            $object->setBlocked($data['blocked']);
            unset($data['blocked']);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['id'] = $object->getId();
        $data['full_name'] = $object->getFullName();
        $data['nin'] = $object->getNin();
        $data['key_id'] = $object->getKeyId();
        $data['signature_type'] = $object->getSignatureType();
        if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('certificateEnd') && null !== $object->getCertificateEnd()) {
            $data['certificate_end'] = $object->getCertificateEnd()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('blocked') && null !== $object->getBlocked()) {
            $data['blocked'] = $object->getBlocked();
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
        return [CashierModel::class => false];
    }
}
