<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;

class ReceiptSellPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptSellPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptSellPayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\ReceiptSellPayload();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('cashier_name', $data)) {
            $object->setCashierName($data['cashier_name']);
            unset($data['cashier_name']);
        }
        if (array_key_exists('departament', $data)) {
            $object->setDepartament($data['departament']);
            unset($data['departament']);
        }
        if (array_key_exists('goods', $data)) {
            $values = [];
            foreach ($data['goods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\GoodItemPayload', 'json', $context);
            }
            $object->setGoods($values);
            unset($data['goods']);
        }
        if (array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\DeliveryPayload', 'json', $context));
            unset($data['delivery']);
        }
        if (array_key_exists('discounts', $data)) {
            $values_1 = [];
            foreach ($data['discounts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\DiscountPayload', 'json', $context);
            }
            $object->setDiscounts($values_1);
            unset($data['discounts']);
        }
        if (array_key_exists('bonuses', $data)) {
            $values_2 = [];
            foreach ($data['bonuses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\BonusPayload', 'json', $context);
            }
            $object->setBonuses($values_2);
            unset($data['bonuses']);
        }
        if (array_key_exists('payments', $data)) {
            $values_3 = [];
            foreach ($data['payments'] as $value_3) {
                $value_4 = $value_3;
                if (is_array($value_3) and isset($value_3['value'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashPaymentPayload', 'json', $context);
                } elseif (is_array($value_3) and isset($value_3['value'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CardPaymentPayload', 'json', $context);
                } elseif (is_array($value_3) and isset($value_3['value'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ObsoleteCardPaymentPayload', 'json', $context);
                }
                $values_3[] = $value_4;
            }
            $object->setPayments($values_3);
            unset($data['payments']);
        }
        if (array_key_exists('rounding', $data)) {
            $object->setRounding($data['rounding']);
            unset($data['rounding']);
        }
        if (array_key_exists('header', $data)) {
            $object->setHeader($data['header']);
            unset($data['header']);
        }
        if (array_key_exists('footer', $data)) {
            $object->setFooter($data['footer']);
            unset($data['footer']);
        }
        if (array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        if (array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        if (array_key_exists('related_receipt_id', $data)) {
            $object->setRelatedReceiptId($data['related_receipt_id']);
            unset($data['related_receipt_id']);
        }
        if (array_key_exists('stock_code', $data)) {
            $object->setStockCode($data['stock_code']);
            unset($data['stock_code']);
        }
        if (array_key_exists('previous_receipt_id', $data)) {
            $object->setPreviousReceiptId($data['previous_receipt_id']);
            unset($data['previous_receipt_id']);
        }
        if (array_key_exists('technical_return', $data)) {
            $object->setTechnicalReturn($data['technical_return']);
            unset($data['technical_return']);
        }
        if (array_key_exists('context', $data)) {
            $values_4 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['context'] as $key => $value_5) {
                $values_4[$key] = $value_5;
            }
            $object->setContext($values_4);
            unset($data['context']);
        }
        if (array_key_exists('is_pawnshop', $data)) {
            $object->setIsPawnshop($data['is_pawnshop']);
            unset($data['is_pawnshop']);
        }
        if (array_key_exists('custom', $data)) {
            $object->setCustom($this->denormalizer->denormalize($data['custom'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptConfigPayload', 'json', $context));
            unset($data['custom']);
        }
        foreach ($data as $key_1 => $value_6) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_6;
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('cashierName') && null !== $object->getCashierName()) {
            $data['cashier_name'] = $object->getCashierName();
        }
        if ($object->isInitialized('departament') && null !== $object->getDepartament()) {
            $data['departament'] = $object->getDepartament();
        }
        $values = [];
        foreach ($object->getGoods() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['goods'] = $values;
        if ($object->isInitialized('delivery') && null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
            $values_1 = [];
            foreach ($object->getDiscounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['discounts'] = $values_1;
        }
        if ($object->isInitialized('bonuses') && null !== $object->getBonuses()) {
            $values_2 = [];
            foreach ($object->getBonuses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['bonuses'] = $values_2;
        }
        if ($object->isInitialized('payments') && null !== $object->getPayments()) {
            $values_3 = [];
            foreach ($object->getPayments() as $value_3) {
                $value_4 = $value_3;
                if (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_3[] = $value_4;
            }
            $data['payments'] = $values_3;
        }
        if ($object->isInitialized('rounding') && null !== $object->getRounding()) {
            $data['rounding'] = $object->getRounding();
        }
        if ($object->isInitialized('header') && null !== $object->getHeader()) {
            $data['header'] = $object->getHeader();
        }
        if ($object->isInitialized('footer') && null !== $object->getFooter()) {
            $data['footer'] = $object->getFooter();
        }
        if ($object->isInitialized('barcode') && null !== $object->getBarcode()) {
            $data['barcode'] = $object->getBarcode();
        }
        if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
            $data['order_id'] = $object->getOrderId();
        }
        if ($object->isInitialized('relatedReceiptId') && null !== $object->getRelatedReceiptId()) {
            $data['related_receipt_id'] = $object->getRelatedReceiptId();
        }
        if ($object->isInitialized('stockCode') && null !== $object->getStockCode()) {
            $data['stock_code'] = $object->getStockCode();
        }
        if ($object->isInitialized('previousReceiptId') && null !== $object->getPreviousReceiptId()) {
            $data['previous_receipt_id'] = $object->getPreviousReceiptId();
        }
        if ($object->isInitialized('technicalReturn') && null !== $object->getTechnicalReturn()) {
            $data['technical_return'] = $object->getTechnicalReturn();
        }
        if ($object->isInitialized('context') && null !== $object->getContext()) {
            $values_4 = [];
            foreach ($object->getContext() as $key => $value_5) {
                $values_4[$key] = $value_5;
            }
            $data['context'] = $values_4;
        }
        if ($object->isInitialized('isPawnshop') && null !== $object->getIsPawnshop()) {
            $data['is_pawnshop'] = $object->getIsPawnshop();
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $data['custom'] = $this->normalizer->normalize($object->getCustom(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_6) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_6;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptSellPayload' => false];
    }
}
