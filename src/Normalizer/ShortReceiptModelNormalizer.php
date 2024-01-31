<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{CardPaymentPayload, CashPaymentPayload, CurrencyExchangeSchema, DiscountModel, GoodItemModel, GoodTax, ObsoleteCardPaymentPayload, ReceiptConfigPayload, ShortReceiptModel, ShortTransaction};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;

class ShortReceiptModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ShortReceiptModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\ShortReceiptModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ShortReceiptModel();
        if (null === $data || false === \is_array($data)) {
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
        if (array_key_exists('transaction', $data)) {
            $object->setTransaction($this->denormalizer->denormalize($data['transaction'], ShortTransaction::class, 'json', $context));
            unset($data['transaction']);
        }
        if (array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
            unset($data['serial']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (array_key_exists('goods', $data)) {
            $values = [];
            foreach ($data['goods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GoodItemModel::class, 'json', $context);
            }
            $object->setGoods($values);
            unset($data['goods']);
        }
        if (array_key_exists('payments', $data)) {
            $values_1 = [];
            foreach ($data['payments'] as $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1) and isset($value_1['value'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, CashPaymentPayload::class, 'json', $context);
                } elseif (is_array($value_1) and isset($value_1['value'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, CardPaymentPayload::class, 'json', $context);
                } elseif (is_array($value_1) and isset($value_1['value'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, ObsoleteCardPaymentPayload::class, 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setPayments($values_1);
            unset($data['payments']);
        }
        if (array_key_exists('total_sum', $data)) {
            $object->setTotalSum($data['total_sum']);
            unset($data['total_sum']);
        }
        if (array_key_exists('total_payment', $data)) {
            $object->setTotalPayment($data['total_payment']);
            unset($data['total_payment']);
        }
        if (array_key_exists('total_rest', $data)) {
            $object->setTotalRest($data['total_rest']);
            unset($data['total_rest']);
        }
        if (array_key_exists('round_sum', $data)) {
            $object->setRoundSum($data['round_sum']);
            unset($data['round_sum']);
        }
        if (array_key_exists('fiscal_code', $data)) {
            $object->setFiscalCode($data['fiscal_code']);
            unset($data['fiscal_code']);
        }
        if (array_key_exists('fiscal_date', $data)) {
            $object->setFiscalDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['fiscal_date']));
            unset($data['fiscal_date']);
        }
        if (array_key_exists('delivered_at', $data)) {
            $object->setDeliveredAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['delivered_at']));
            unset($data['delivered_at']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('taxes', $data)) {
            $values_2 = [];
            foreach ($data['taxes'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, GoodTax::class, 'json', $context);
            }
            $object->setTaxes($values_2);
            unset($data['taxes']);
        }
        if (array_key_exists('discounts', $data)) {
            $values_3 = [];
            foreach ($data['discounts'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, DiscountModel::class, 'json', $context);
            }
            $object->setDiscounts($values_3);
            unset($data['discounts']);
        }
        if (array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
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
        if (array_key_exists('custom', $data)) {
            $object->setCustom($this->denormalizer->denormalize($data['custom'], ReceiptConfigPayload::class, 'json', $context));
            unset($data['custom']);
        }
        if (array_key_exists('context', $data)) {
            $values_4 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['context'] as $key => $value_5) {
                $values_4[$key] = $value_5;
            }
            $object->setContext($values_4);
            unset($data['context']);
        }
        if (array_key_exists('is_created_offline', $data)) {
            $object->setIsCreatedOffline($data['is_created_offline']);
            unset($data['is_created_offline']);
        }
        if (array_key_exists('is_sent_dps', $data)) {
            $object->setIsSentDps($data['is_sent_dps']);
            unset($data['is_sent_dps']);
        }
        if (array_key_exists('sent_dps_at', $data)) {
            $object->setSentDpsAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['sent_dps_at']));
            unset($data['sent_dps_at']);
        }
        if (array_key_exists('tax_url', $data)) {
            $object->setTaxUrl($data['tax_url']);
            unset($data['tax_url']);
        }
        if (array_key_exists('related_receipt_id', $data)) {
            $object->setRelatedReceiptId($data['related_receipt_id']);
            unset($data['related_receipt_id']);
        }
        if (array_key_exists('technical_return', $data)) {
            $object->setTechnicalReturn($data['technical_return']);
            unset($data['technical_return']);
        }
        if (array_key_exists('stock_code', $data)) {
            $object->setStockCode($data['stock_code']);
            unset($data['stock_code']);
        }
        if (array_key_exists('currency_exchange', $data)) {
            $object->setCurrencyExchange($this->denormalizer->denormalize($data['currency_exchange'], CurrencyExchangeSchema::class, 'json', $context));
            unset($data['currency_exchange']);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['id'] = $object->getId();
        $data['type'] = $object->getType();
        if ($object->isInitialized('transaction') && null !== $object->getTransaction()) {
            $data['transaction'] = $this->normalizer->normalize($object->getTransaction(), 'json', $context);
        }
        $data['serial'] = $object->getSerial();
        $data['status'] = $object->getStatus();
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
        $data['total_sum'] = $object->getTotalSum();
        $data['total_payment'] = $object->getTotalPayment();
        $data['total_rest'] = $object->getTotalRest();
        if ($object->isInitialized('roundSum') && null !== $object->getRoundSum()) {
            $data['round_sum'] = $object->getRoundSum();
        }
        if ($object->isInitialized('fiscalCode') && null !== $object->getFiscalCode()) {
            $data['fiscal_code'] = $object->getFiscalCode();
        }
        if ($object->isInitialized('fiscalDate') && null !== $object->getFiscalDate()) {
            $data['fiscal_date'] = $object->getFiscalDate()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('deliveredAt') && null !== $object->getDeliveredAt()) {
            $data['delivered_at'] = $object->getDeliveredAt()->format('Y-m-d\\TH:i:s.uP');
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        $values_2 = [];
        foreach ($object->getTaxes() as $value_3) {
            $values_2[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['taxes'] = $values_2;
        if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
            $values_3 = [];
            foreach ($object->getDiscounts() as $value_4) {
                $values_3[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['discounts'] = $values_3;
        }
        if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
            $data['order_id'] = $object->getOrderId();
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
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $data['custom'] = $this->normalizer->normalize($object->getCustom(), 'json', $context);
        }
        if ($object->isInitialized('context') && null !== $object->getContext()) {
            $values_4 = [];
            foreach ($object->getContext() as $key => $value_5) {
                $values_4[$key] = $value_5;
            }
            $data['context'] = $values_4;
        }
        if ($object->isInitialized('isCreatedOffline') && null !== $object->getIsCreatedOffline()) {
            $data['is_created_offline'] = $object->getIsCreatedOffline();
        }
        if ($object->isInitialized('isSentDps') && null !== $object->getIsSentDps()) {
            $data['is_sent_dps'] = $object->getIsSentDps();
        }
        if ($object->isInitialized('sentDpsAt') && null !== $object->getSentDpsAt()) {
            $data['sent_dps_at'] = $object->getSentDpsAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('taxUrl') && null !== $object->getTaxUrl()) {
            $data['tax_url'] = $object->getTaxUrl();
        }
        if ($object->isInitialized('relatedReceiptId') && null !== $object->getRelatedReceiptId()) {
            $data['related_receipt_id'] = $object->getRelatedReceiptId();
        }
        if ($object->isInitialized('technicalReturn') && null !== $object->getTechnicalReturn()) {
            $data['technical_return'] = $object->getTechnicalReturn();
        }
        if ($object->isInitialized('stockCode') && null !== $object->getStockCode()) {
            $data['stock_code'] = $object->getStockCode();
        }
        if ($object->isInitialized('currencyExchange') && null !== $object->getCurrencyExchange()) {
            $data['currency_exchange'] = $this->normalizer->normalize($object->getCurrencyExchange(), 'json', $context);
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
        return [ShortReceiptModel::class => false];
    }
}
