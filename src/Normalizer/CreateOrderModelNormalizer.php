<?php

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
use function is_array;

class CreateOrderModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CreateOrderModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CreateOrderModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\CreateOrderModel();
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
        if (array_key_exists('cashier_id', $data)) {
            $object->setCashierId($data['cashier_id']);
            unset($data['cashier_id']);
        }
        if (array_key_exists('custom_status', $data)) {
            $object->setCustomStatus($data['custom_status']);
            unset($data['custom_status']);
        }
        if (array_key_exists('payment_method', $data)) {
            $object->setPaymentMethod($data['payment_method']);
            unset($data['payment_method']);
        }
        if (array_key_exists('receipt_draft', $data)) {
            $object->setReceiptDraft($this->denormalizer->denormalize($data['receipt_draft'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderReceiptModel', 'json', $context));
            unset($data['receipt_draft']);
        }
        if (array_key_exists('delivery_details', $data)) {
            $object->setDeliveryDetails($this->denormalizer->denormalize($data['delivery_details'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrderDeliveryDetailsModel', 'json', $context));
            unset($data['delivery_details']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
            $data['order_id'] = $object->getOrderId();
        }
        if ($object->isInitialized('cashierId') && null !== $object->getCashierId()) {
            $data['cashier_id'] = $object->getCashierId();
        }
        if ($object->isInitialized('customStatus') && null !== $object->getCustomStatus()) {
            $data['custom_status'] = $object->getCustomStatus();
        }
        if ($object->isInitialized('paymentMethod') && null !== $object->getPaymentMethod()) {
            $data['payment_method'] = $object->getPaymentMethod();
        }
        $data['receipt_draft'] = $this->normalizer->normalize($object->getReceiptDraft(), 'json', $context);
        if ($object->isInitialized('deliveryDetails') && null !== $object->getDeliveryDetails()) {
            $data['delivery_details'] = $this->normalizer->normalize($object->getDeliveryDetails(), 'json', $context);
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\CreateOrderModel' => false];
    }
}
