<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_int;

class CalculatedReceiptSellPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CalculatedReceiptSellPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\CalculatedReceiptSellPayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\CalculatedReceiptSellPayload();
        if (array_key_exists('total_payment', $data) && is_int($data['total_payment'])) {
            $data['total_payment'] = (float) $data['total_payment'];
        }
        if (array_key_exists('total_sum', $data) && is_int($data['total_sum'])) {
            $data['total_sum'] = (float) $data['total_sum'];
        }
        if (array_key_exists('round_sum', $data) && is_int($data['round_sum'])) {
            $data['round_sum'] = (float) $data['round_sum'];
        }
        if (array_key_exists('total_rest', $data) && is_int($data['total_rest'])) {
            $data['total_rest'] = (float) $data['total_rest'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('fiscal_code', $data)) {
            $object->setFiscalCode($data['fiscal_code']);
            unset($data['fiscal_code']);
        }
        if (array_key_exists('fiscal_date', $data)) {
            $object->setFiscalDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['fiscal_date']));
            unset($data['fiscal_date']);
        }
        if (array_key_exists('total_payment', $data)) {
            $object->setTotalPayment($data['total_payment']);
            unset($data['total_payment']);
        }
        if (array_key_exists('total_sum', $data)) {
            $object->setTotalSum($data['total_sum']);
            unset($data['total_sum']);
        }
        if (array_key_exists('round_sum', $data)) {
            $object->setRoundSum($data['round_sum']);
            unset($data['round_sum']);
        }
        if (array_key_exists('total_rest', $data)) {
            $object->setTotalRest($data['total_rest']);
            unset($data['total_rest']);
        }
        if (array_key_exists('technical_return', $data)) {
            $object->setTechnicalReturn($data['technical_return']);
            unset($data['technical_return']);
        }
        if (array_key_exists('goods', $data)) {
            $values = [];
            foreach ($data['goods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'RevoTale\\CheckboxUA\\Model\\CalculatedGoodItemPayload', 'json', $context);
            }
            $object->setGoods($values);
            unset($data['goods']);
        }
        if (array_key_exists('payments', $data)) {
            $values_1 = [];
            foreach ($data['payments'] as $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1) and isset($value_1['value'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'RevoTale\\CheckboxUA\\Model\\CashPaymentPayload', 'json', $context);
                } elseif (is_array($value_1) and isset($value_1['value'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'RevoTale\\CheckboxUA\\Model\\CardPaymentPayload', 'json', $context);
                } elseif (is_array($value_1) and isset($value_1['value'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'RevoTale\\CheckboxUA\\Model\\ObsoleteCardPaymentPayload', 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setPayments($values_1);
            unset($data['payments']);
        }
        if (array_key_exists('is_sell', $data)) {
            $object->setIsSell($data['is_sell']);
            unset($data['is_sell']);
        }
        if (array_key_exists('discounts', $data)) {
            $values_2 = [];
            foreach ($data['discounts'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, 'RevoTale\\CheckboxUA\\Model\\CalculatedDiscountPayload', 'json', $context);
            }
            $object->setDiscounts($values_2);
            unset($data['discounts']);
        }
        if (array_key_exists('bonuses', $data)) {
            $values_3 = [];
            foreach ($data['bonuses'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, 'RevoTale\\CheckboxUA\\Model\\BonusPayload', 'json', $context);
            }
            $object->setBonuses($values_3);
            unset($data['bonuses']);
        }
        if (array_key_exists('taxes', $data)) {
            $values_4 = [];
            foreach ($data['taxes'] as $value_5) {
                $values_4[] = $this->denormalizer->denormalize($value_5, 'RevoTale\\CheckboxUA\\Model\\CalculatedReceiptTaxPayload', 'json', $context);
            }
            $object->setTaxes($values_4);
            unset($data['taxes']);
        }
        if (array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'RevoTale\\CheckboxUA\\Model\\DeliveryPayload', 'json', $context));
            unset($data['delivery']);
        }
        if (array_key_exists('cashier_name', $data)) {
            $object->setCashierName($data['cashier_name']);
            unset($data['cashier_name']);
        }
        if (array_key_exists('departament', $data)) {
            $object->setDepartament($data['departament']);
            unset($data['departament']);
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
        if (array_key_exists('context', $data)) {
            $values_5 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['context'] as $key => $value_6) {
                $values_5[$key] = $value_6;
            }
            $object->setContext($values_5);
            unset($data['context']);
        }
        if (array_key_exists('custom', $data)) {
            $object->setCustom($this->denormalizer->denormalize($data['custom'], 'RevoTale\\CheckboxUA\\Model\\ReceiptConfigPayload', 'json', $context));
            unset($data['custom']);
        }
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_7;
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
        $data['fiscal_code'] = $object->getFiscalCode();
        $data['fiscal_date'] = $object->getFiscalDate()->format('Y-m-d\\TH:i:s.uP');
        $data['total_payment'] = $object->getTotalPayment();
        $data['total_sum'] = $object->getTotalSum();
        if ($object->isInitialized('roundSum') && null !== $object->getRoundSum()) {
            $data['round_sum'] = $object->getRoundSum();
        }
        $data['total_rest'] = $object->getTotalRest();
        if ($object->isInitialized('technicalReturn') && null !== $object->getTechnicalReturn()) {
            $data['technical_return'] = $object->getTechnicalReturn();
        }
        $values = [];
        foreach ($object->getGoods() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['goods'] = $values;
        $values_1 = [];
        foreach ($object->getPayments() as $value_1) {
            $value_2 = $value_1;
            if (is_object($value_1)) {
                $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
            } elseif (is_object($value_1)) {
                $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
            } elseif (is_object($value_1)) {
                $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $values_1[] = $value_2;
        }
        $data['payments'] = $values_1;
        if ($object->isInitialized('isSell') && null !== $object->getIsSell()) {
            $data['is_sell'] = $object->getIsSell();
        }
        if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
            $values_2 = [];
            foreach ($object->getDiscounts() as $value_3) {
                $values_2[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['discounts'] = $values_2;
        }
        if ($object->isInitialized('bonuses') && null !== $object->getBonuses()) {
            $values_3 = [];
            foreach ($object->getBonuses() as $value_4) {
                $values_3[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['bonuses'] = $values_3;
        }
        $values_4 = [];
        foreach ($object->getTaxes() as $value_5) {
            $values_4[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $data['taxes'] = $values_4;
        if ($object->isInitialized('delivery') && null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if ($object->isInitialized('cashierName') && null !== $object->getCashierName()) {
            $data['cashier_name'] = $object->getCashierName();
        }
        if ($object->isInitialized('departament') && null !== $object->getDepartament()) {
            $data['departament'] = $object->getDepartament();
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
        if ($object->isInitialized('context') && null !== $object->getContext()) {
            $values_5 = [];
            foreach ($object->getContext() as $key => $value_6) {
                $values_5[$key] = $value_6;
            }
            $data['context'] = $values_5;
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $data['custom'] = $this->normalizer->normalize($object->getCustom(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_7;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['RevoTale\\CheckboxUA\\Model\\CalculatedReceiptSellPayload' => false];
    }
}
