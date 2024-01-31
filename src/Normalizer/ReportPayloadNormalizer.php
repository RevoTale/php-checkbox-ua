<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{ReportPayload, ReportPaymentsPayload, ReportTaxesPayload};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class ReportPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ReportPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\ReportPayload;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ReportPayload();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
            unset($data['serial']);
        }
        if (array_key_exists('payments', $data)) {
            $values = [];
            foreach ($data['payments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ReportPaymentsPayload::class, 'json', $context);
            }
            $object->setPayments($values);
            unset($data['payments']);
        }
        if (array_key_exists('taxes', $data)) {
            $values_1 = [];
            foreach ($data['taxes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ReportTaxesPayload::class, 'json', $context);
            }
            $object->setTaxes($values_1);
            unset($data['taxes']);
        }
        if (array_key_exists('sell_receipts_count', $data)) {
            $object->setSellReceiptsCount($data['sell_receipts_count']);
            unset($data['sell_receipts_count']);
        }
        if (array_key_exists('return_receipts_count', $data)) {
            $object->setReturnReceiptsCount($data['return_receipts_count']);
            unset($data['return_receipts_count']);
        }
        if (array_key_exists('cash_withdrawal_receipts_count', $data)) {
            $object->setCashWithdrawalReceiptsCount($data['cash_withdrawal_receipts_count']);
            unset($data['cash_withdrawal_receipts_count']);
        }
        if (array_key_exists('last_receipt_id', $data)) {
            $object->setLastReceiptId($data['last_receipt_id']);
            unset($data['last_receipt_id']);
        }
        if (array_key_exists('initial', $data)) {
            $object->setInitial($data['initial']);
            unset($data['initial']);
        }
        if (array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        }
        if (array_key_exists('sales_round_up', $data)) {
            $object->setSalesRoundUp($data['sales_round_up']);
            unset($data['sales_round_up']);
        }
        if (array_key_exists('sales_round_down', $data)) {
            $object->setSalesRoundDown($data['sales_round_down']);
            unset($data['sales_round_down']);
        }
        if (array_key_exists('returns_round_up', $data)) {
            $object->setReturnsRoundUp($data['returns_round_up']);
            unset($data['returns_round_up']);
        }
        if (array_key_exists('returns_round_down', $data)) {
            $object->setReturnsRoundDown($data['returns_round_down']);
            unset($data['returns_round_down']);
        }
        if (array_key_exists('discounts_sum', $data)) {
            $object->setDiscountsSum($data['discounts_sum']);
            unset($data['discounts_sum']);
        }
        if (array_key_exists('extra_charge_sum', $data)) {
            $object->setExtraChargeSum($data['extra_charge_sum']);
            unset($data['extra_charge_sum']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('serial') && null !== $object->getSerial()) {
            $data['serial'] = $object->getSerial();
        }
        $values = [];
        foreach ($object->getPayments() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['payments'] = $values;
        $values_1 = [];
        foreach ($object->getTaxes() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['taxes'] = $values_1;
        $data['sell_receipts_count'] = $object->getSellReceiptsCount();
        $data['return_receipts_count'] = $object->getReturnReceiptsCount();
        if ($object->isInitialized('cashWithdrawalReceiptsCount') && null !== $object->getCashWithdrawalReceiptsCount()) {
            $data['cash_withdrawal_receipts_count'] = $object->getCashWithdrawalReceiptsCount();
        }
        if ($object->isInitialized('lastReceiptId') && null !== $object->getLastReceiptId()) {
            $data['last_receipt_id'] = $object->getLastReceiptId();
        }
        $data['initial'] = $object->getInitial();
        $data['balance'] = $object->getBalance();
        if ($object->isInitialized('salesRoundUp') && null !== $object->getSalesRoundUp()) {
            $data['sales_round_up'] = $object->getSalesRoundUp();
        }
        if ($object->isInitialized('salesRoundDown') && null !== $object->getSalesRoundDown()) {
            $data['sales_round_down'] = $object->getSalesRoundDown();
        }
        if ($object->isInitialized('returnsRoundUp') && null !== $object->getReturnsRoundUp()) {
            $data['returns_round_up'] = $object->getReturnsRoundUp();
        }
        if ($object->isInitialized('returnsRoundDown') && null !== $object->getReturnsRoundDown()) {
            $data['returns_round_down'] = $object->getReturnsRoundDown();
        }
        if ($object->isInitialized('discountsSum') && null !== $object->getDiscountsSum()) {
            $data['discounts_sum'] = $object->getDiscountsSum();
        }
        if ($object->isInitialized('extraChargeSum') && null !== $object->getExtraChargeSum()) {
            $data['extra_charge_sum'] = $object->getExtraChargeSum();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [ReportPayload::class => false];
    }
}
