<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{CardPaymentPayload, CashWithdrawalReceiptPayload, DeliveryPayload};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class CashWithdrawalReceiptPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CashWithdrawalReceiptPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CashWithdrawalReceiptPayload;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CashWithdrawalReceiptPayload();
        if (null === $data || false === is_array($data)) {
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
        if (array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], CardPaymentPayload::class, 'json', $context));
            unset($data['payment']);
        }
        if (array_key_exists('fiscal_code', $data)) {
            $object->setFiscalCode($data['fiscal_code']);
            unset($data['fiscal_code']);
        }
        if (array_key_exists('fiscal_date', $data)) {
            $object->setFiscalDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['fiscal_date']));
            unset($data['fiscal_date']);
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
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['context'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setContext($values);
            unset($data['context']);
        }
        if (array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], DeliveryPayload::class, 'json', $context));
            unset($data['delivery']);
        }
        if (array_key_exists('previous_receipt_id', $data)) {
            $object->setPreviousReceiptId($data['previous_receipt_id']);
            unset($data['previous_receipt_id']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
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
        $data['payment'] = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        if ($object->isInitialized('fiscalCode') && null !== $object->getFiscalCode()) {
            $data['fiscal_code'] = $object->getFiscalCode();
        }
        if ($object->isInitialized('fiscalDate') && null !== $object->getFiscalDate()) {
            $data['fiscal_date'] = $object->getFiscalDate()->format('Y-m-d\\TH:i:s.uP');
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
            $values = [];
            foreach ($object->getContext() as $key => $value) {
                $values[$key] = $value;
            }
            $data['context'] = $values;
        }
        if ($object->isInitialized('delivery') && null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if ($object->isInitialized('previousReceiptId') && null !== $object->getPreviousReceiptId()) {
            $data['previous_receipt_id'] = $object->getPreviousReceiptId();
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CashWithdrawalReceiptPayload::class => false];
    }
}
