<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use RevoTale\CheckboxUA\Model\ReportModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\CheckArray;
use RevoTale\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;
use function is_array;

class ReportModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReportModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReportModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ReportModel();
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
        if (array_key_exists('is_z_report', $data)) {
            $object->setIsZReport($data['is_z_report']);
            unset($data['is_z_report']);
        }
        if (array_key_exists('payments', $data)) {
            $values = [];
            foreach ($data['payments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReportPaymentsModel', 'json', $context);
            }
            $object->setPayments($values);
            unset($data['payments']);
        }
        if (array_key_exists('taxes', $data)) {
            $values_1 = [];
            foreach ($data['taxes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReportTaxesModel', 'json', $context);
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
        if (array_key_exists('transfers_count', $data)) {
            $object->setTransfersCount($data['transfers_count']);
            unset($data['transfers_count']);
        }
        if (array_key_exists('transfers_sum', $data)) {
            $object->setTransfersSum($data['transfers_sum']);
            unset($data['transfers_sum']);
        }
        if (array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        }
        if (array_key_exists('initial', $data)) {
            $object->setInitial($data['initial']);
            unset($data['initial']);
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
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('discounts_sum', $data)) {
            $object->setDiscountsSum(null === $data['discounts_sum'] ? null : $data['discounts_sum']);
            unset($data['discounts_sum']);
        }
        if (array_key_exists('extra_charge_sum', $data)) {
            $object->setExtraChargeSum($data['extra_charge_sum']);
            unset($data['extra_charge_sum']);
        }
        if (array_key_exists('transaction_fail', $data)) {
            $object->setTransactionFail($data['transaction_fail']);
            unset($data['transaction_fail']);
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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId();
        $data['serial'] = $object->getSerial();
        $data['is_z_report'] = $object->getIsZReport();
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
        $data['cash_withdrawal_receipts_count'] = $object->getCashWithdrawalReceiptsCount();
        $data['transfers_count'] = $object->getTransfersCount();
        $data['transfers_sum'] = $object->getTransfersSum();
        $data['balance'] = $object->getBalance();
        $data['initial'] = $object->getInitial();
        $data['sales_round_up'] = $object->getSalesRoundUp();
        $data['sales_round_down'] = $object->getSalesRoundDown();
        $data['returns_round_up'] = $object->getReturnsRoundUp();
        $data['returns_round_down'] = $object->getReturnsRoundDown();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('discountsSum') && null !== $object->getDiscountsSum()) {
            $data['discounts_sum'] = $object->getDiscountsSum();
        }
        if ($object->isInitialized('extraChargeSum') && null !== $object->getExtraChargeSum()) {
            $data['extra_charge_sum'] = $object->getExtraChargeSum();
        }
        if ($object->isInitialized('transactionFail') && null !== $object->getTransactionFail()) {
            $data['transaction_fail'] = $object->getTransactionFail();
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReportModel' => false];
    }
}
