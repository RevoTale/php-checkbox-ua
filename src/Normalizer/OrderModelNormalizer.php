<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use RevoTale\CheckboxUA\Model\OrderModel;
use RevoTale\CheckboxUA\Model\OrderDeliveryDetailsModel;
use RevoTale\CheckboxUA\Model\OrderReceiptModel;

class OrderModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\OrderModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\OrderModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\OrderModel();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (array_key_exists('custom_status', $data)) {
            $object->setCustomStatus($data['custom_status']);
            unset($data['custom_status']);
        }
        if (array_key_exists('is_paid', $data)) {
            $object->setIsPaid($data['is_paid']);
            unset($data['is_paid']);
        }
        if (array_key_exists('payment_method', $data)) {
            $object->setPaymentMethod($data['payment_method']);
            unset($data['payment_method']);
        }
        if (array_key_exists('receipt_draft', $data)) {
            $object->setReceiptDraft($this->denormalizer->denormalize($data['receipt_draft'], OrderReceiptModel::class, 'json', $context));
            unset($data['receipt_draft']);
        }
        if (array_key_exists('delivery_details', $data)) {
            $object->setDeliveryDetails($this->denormalizer->denormalize($data['delivery_details'], OrderDeliveryDetailsModel::class, 'json', $context));
            unset($data['delivery_details']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('not_fiscalize', $data)) {
            $object->setNotFiscalize($data['not_fiscalize']);
            unset($data['not_fiscalize']);
        }
        if (array_key_exists('stock_code', $data)) {
            $object->setStockCode($data['stock_code']);
            unset($data['stock_code']);
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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId();
        if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
            $data['order_id'] = $object->getOrderId();
        }
        $data['status'] = $object->getStatus();
        if ($object->isInitialized('customStatus') && null !== $object->getCustomStatus()) {
            $data['custom_status'] = $object->getCustomStatus();
        }
        $data['is_paid'] = $object->getIsPaid();
        if ($object->isInitialized('paymentMethod') && null !== $object->getPaymentMethod()) {
            $data['payment_method'] = $object->getPaymentMethod();
        }
        $data['receipt_draft'] = $this->normalizer->normalize($object->getReceiptDraft(), 'json', $context);
        if ($object->isInitialized('deliveryDetails') && null !== $object->getDeliveryDetails()) {
            $data['delivery_details'] = $this->normalizer->normalize($object->getDeliveryDetails(), 'json', $context);
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('notFiscalize') && null !== $object->getNotFiscalize()) {
            $data['not_fiscalize'] = $object->getNotFiscalize();
        }
        if ($object->isInitialized('stockCode') && null !== $object->getStockCode()) {
            $data['stock_code'] = $object->getStockCode();
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
        return [OrderModel::class => false];
    }
}
