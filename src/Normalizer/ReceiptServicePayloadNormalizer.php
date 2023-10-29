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
use RevoTale\CheckboxUA\Runtime\Normalizer\CheckArray;
use RevoTale\CheckboxUA\Runtime\Normalizer\ValidatorTrait;

use function array_key_exists;

class ReceiptServicePayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptServicePayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptServicePayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ReceiptServicePayload();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('payment', $data)) {
            $value = $data['payment'];
            if (is_array($data['payment']) and isset($data['payment']['value'])) {
                $value = $this->denormalizer->denormalize($data['payment'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashPaymentPayload', 'json', $context);
            } elseif (is_array($data['payment']) and isset($data['payment']['value'])) {
                $value = $this->denormalizer->denormalize($data['payment'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CardPaymentPayload', 'json', $context);
            } elseif (is_array($data['payment']) and isset($data['payment']['value'])) {
                $value = $this->denormalizer->denormalize($data['payment'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ObsoleteCardPaymentPayload', 'json', $context);
            }
            $object->setPayment($value);
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
        if (array_key_exists('context', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['context'] as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $object->setContext($values);
            unset($data['context']);
        }
        if (array_key_exists('custom', $data)) {
            $object->setCustom($this->denormalizer->denormalize($data['custom'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptConfigPayload', 'json', $context));
            unset($data['custom']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
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
        $value = $object->getPayment();
        if (is_object($object->getPayment())) {
            $value = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        } elseif (is_object($object->getPayment())) {
            $value = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        } elseif (is_object($object->getPayment())) {
            $value = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        }
        $data['payment'] = $value;
        if ($object->isInitialized('fiscalCode') && null !== $object->getFiscalCode()) {
            $data['fiscal_code'] = $object->getFiscalCode();
        }
        if ($object->isInitialized('fiscalDate') && null !== $object->getFiscalDate()) {
            $data['fiscal_date'] = $object->getFiscalDate()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('context') && null !== $object->getContext()) {
            $values = [];
            foreach ($object->getContext() as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $data['context'] = $values;
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $data['custom'] = $this->normalizer->normalize($object->getCustom(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_2;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\ReceiptServicePayload' => false];
    }
}
