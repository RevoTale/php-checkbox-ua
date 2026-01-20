<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\CashierPermissionsModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class CashierPermissionsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CashierPermissionsModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CashierPermissionsModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CashierPermissionsModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('orders', $data)) {
            $object->setOrders($data['orders']);
            unset($data['orders']);
        }
        if (array_key_exists('add_discounts', $data)) {
            $object->setAddDiscounts($data['add_discounts']);
            unset($data['add_discounts']);
        }
        if (array_key_exists('editing_goods_sum', $data)) {
            $object->setEditingGoodsSum($data['editing_goods_sum']);
            unset($data['editing_goods_sum']);
        }
        if (array_key_exists('deferred_receipt', $data)) {
            $object->setDeferredReceipt($data['deferred_receipt']);
            unset($data['deferred_receipt']);
        }
        if (array_key_exists('editing_good_price', $data)) {
            $object->setEditingGoodPrice($data['editing_good_price']);
            unset($data['editing_good_price']);
        }
        if (array_key_exists('can_add_manual_good', $data)) {
            $object->setCanAddManualGood($data['can_add_manual_good']);
            unset($data['can_add_manual_good']);
        }
        if (array_key_exists('service_in', $data)) {
            $object->setServiceIn($data['service_in']);
            unset($data['service_in']);
        }
        if (array_key_exists('service_out', $data)) {
            $object->setServiceOut($data['service_out']);
            unset($data['service_out']);
        }
        if (array_key_exists('returns', $data)) {
            $object->setReturns($data['returns']);
            unset($data['returns']);
        }
        if (array_key_exists('sales', $data)) {
            $object->setSales($data['sales']);
            unset($data['sales']);
        }
        if (array_key_exists('card_payment', $data)) {
            $object->setCardPayment($data['card_payment']);
            unset($data['card_payment']);
        }
        if (array_key_exists('cash_payment', $data)) {
            $object->setCashPayment($data['cash_payment']);
            unset($data['cash_payment']);
        }
        if (array_key_exists('other_payment', $data)) {
            $object->setOtherPayment($data['other_payment']);
            unset($data['other_payment']);
        }
        if (array_key_exists('mixed_payment', $data)) {
            $object->setMixedPayment($data['mixed_payment']);
            unset($data['mixed_payment']);
        }
        if (array_key_exists('branch_params', $data)) {
            $object->setBranchParams($data['branch_params']);
            unset($data['branch_params']);
        }
        if (array_key_exists('reports_history', $data)) {
            $object->setReportsHistory($data['reports_history']);
            unset($data['reports_history']);
        }
        if (array_key_exists('additional_service_receipt', $data)) {
            $object->setAdditionalServiceReceipt($data['additional_service_receipt']);
            unset($data['additional_service_receipt']);
        }
        if (array_key_exists('free_return', $data)) {
            $object->setFreeReturn($data['free_return']);
            unset($data['free_return']);
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
        if ($object->isInitialized('orders') && null !== $object->getOrders()) {
            $data['orders'] = $object->getOrders();
        }
        if ($object->isInitialized('addDiscounts') && null !== $object->getAddDiscounts()) {
            $data['add_discounts'] = $object->getAddDiscounts();
        }
        if ($object->isInitialized('editingGoodsSum') && null !== $object->getEditingGoodsSum()) {
            $data['editing_goods_sum'] = $object->getEditingGoodsSum();
        }
        if ($object->isInitialized('deferredReceipt') && null !== $object->getDeferredReceipt()) {
            $data['deferred_receipt'] = $object->getDeferredReceipt();
        }
        if ($object->isInitialized('editingGoodPrice') && null !== $object->getEditingGoodPrice()) {
            $data['editing_good_price'] = $object->getEditingGoodPrice();
        }
        if ($object->isInitialized('canAddManualGood') && null !== $object->getCanAddManualGood()) {
            $data['can_add_manual_good'] = $object->getCanAddManualGood();
        }
        if ($object->isInitialized('serviceIn') && null !== $object->getServiceIn()) {
            $data['service_in'] = $object->getServiceIn();
        }
        if ($object->isInitialized('serviceOut') && null !== $object->getServiceOut()) {
            $data['service_out'] = $object->getServiceOut();
        }
        if ($object->isInitialized('returns') && null !== $object->getReturns()) {
            $data['returns'] = $object->getReturns();
        }
        if ($object->isInitialized('sales') && null !== $object->getSales()) {
            $data['sales'] = $object->getSales();
        }
        if ($object->isInitialized('cardPayment') && null !== $object->getCardPayment()) {
            $data['card_payment'] = $object->getCardPayment();
        }
        if ($object->isInitialized('cashPayment') && null !== $object->getCashPayment()) {
            $data['cash_payment'] = $object->getCashPayment();
        }
        if ($object->isInitialized('otherPayment') && null !== $object->getOtherPayment()) {
            $data['other_payment'] = $object->getOtherPayment();
        }
        if ($object->isInitialized('mixedPayment') && null !== $object->getMixedPayment()) {
            $data['mixed_payment'] = $object->getMixedPayment();
        }
        if ($object->isInitialized('branchParams') && null !== $object->getBranchParams()) {
            $data['branch_params'] = $object->getBranchParams();
        }
        if ($object->isInitialized('reportsHistory') && null !== $object->getReportsHistory()) {
            $data['reports_history'] = $object->getReportsHistory();
        }
        if ($object->isInitialized('additionalServiceReceipt') && null !== $object->getAdditionalServiceReceipt()) {
            $data['additional_service_receipt'] = $object->getAdditionalServiceReceipt();
        }
        if ($object->isInitialized('freeReturn') && null !== $object->getFreeReturn()) {
            $data['free_return'] = $object->getFreeReturn();
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
        return [CashierPermissionsModel::class => false];
    }
}
