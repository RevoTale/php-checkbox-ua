<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\ReportPaymentsModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class ReportPaymentsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ReportPaymentsModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\ReportPaymentsModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ReportPaymentsModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('provider_type', $data)) {
            $object->setProviderType($data['provider_type']);
            unset($data['provider_type']);
        }
        if (array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        if (array_key_exists('sell_sum', $data)) {
            $object->setSellSum($data['sell_sum']);
            unset($data['sell_sum']);
        }
        if (array_key_exists('return_sum', $data)) {
            $object->setReturnSum($data['return_sum']);
            unset($data['return_sum']);
        }
        if (array_key_exists('service_in', $data)) {
            $object->setServiceIn($data['service_in']);
            unset($data['service_in']);
        }
        if (array_key_exists('service_out', $data)) {
            $object->setServiceOut($data['service_out']);
            unset($data['service_out']);
        }
        if (array_key_exists('cash_withdrawal', $data)) {
            $object->setCashWithdrawal($data['cash_withdrawal']);
            unset($data['cash_withdrawal']);
        }
        if (array_key_exists('cash_withdrawal_commission', $data)) {
            $object->setCashWithdrawalCommission($data['cash_withdrawal_commission']);
            unset($data['cash_withdrawal_commission']);
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
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        $data['type'] = $object->getType();
        if ($object->isInitialized('providerType') && null !== $object->getProviderType()) {
            $data['provider_type'] = $object->getProviderType();
        }
        $data['label'] = $object->getLabel();
        $data['sell_sum'] = $object->getSellSum();
        $data['return_sum'] = $object->getReturnSum();
        $data['service_in'] = $object->getServiceIn();
        $data['service_out'] = $object->getServiceOut();
        $data['cash_withdrawal'] = $object->getCashWithdrawal();
        $data['cash_withdrawal_commission'] = $object->getCashWithdrawalCommission();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ReportPaymentsModel::class => false];
    }
}
