<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\BalanceModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class BalanceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\BalanceModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\BalanceModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BalanceModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('initial', $data)) {
            $object->setInitial($data['initial']);
            unset($data['initial']);
        }
        if (array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        }
        if (array_key_exists('cash_sales', $data)) {
            $object->setCashSales($data['cash_sales']);
            unset($data['cash_sales']);
        }
        if (array_key_exists('card_sales', $data)) {
            $object->setCardSales($data['card_sales']);
            unset($data['card_sales']);
        }
        if (array_key_exists('discounts_sum', $data)) {
            $object->setDiscountsSum(null === $data['discounts_sum'] ? null : $data['discounts_sum']); // Manually fixed nulllability
            unset($data['discounts_sum']);
        }
        if (array_key_exists('extra_charge_sum', $data)) {
            $object->setExtraChargeSum($data['extra_charge_sum']);
            unset($data['extra_charge_sum']);
        }
        if (array_key_exists('cash_returns', $data)) {
            $object->setCashReturns($data['cash_returns']);
            unset($data['cash_returns']);
        }
        if (array_key_exists('card_returns', $data)) {
            $object->setCardReturns($data['card_returns']);
            unset($data['card_returns']);
        }
        if (array_key_exists('service_in', $data)) {
            $object->setServiceIn($data['service_in']);
            unset($data['service_in']);
        }
        if (array_key_exists('service_out', $data)) {
            $object->setServiceOut($data['service_out']);
            unset($data['service_out']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : (DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at'])));
            unset($data['updated_at']);
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
        $data['initial'] = $object->getInitial();
        $data['balance'] = $object->getBalance();
        $data['cash_sales'] = $object->getCashSales();
        $data['card_sales'] = $object->getCardSales();
        if ($object->isInitialized('discountsSum') && null !== $object->getDiscountsSum()) {
            $data['discounts_sum'] = $object->getDiscountsSum();
        }
        if ($object->isInitialized('extraChargeSum') && null !== $object->getExtraChargeSum()) {
            $data['extra_charge_sum'] = $object->getExtraChargeSum();
        }
        $data['cash_returns'] = $object->getCashReturns();
        $data['card_returns'] = $object->getCardReturns();
        $data['service_in'] = $object->getServiceIn();
        $data['service_out'] = $object->getServiceOut();
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
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
        return [BalanceModel::class => false];
    }
}
