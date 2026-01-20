<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\CalculatedReceiptTaxPayload;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use function is_int;

class CalculatedReceiptTaxPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CalculatedReceiptTaxPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CalculatedReceiptTaxPayload;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CalculatedReceiptTaxPayload();
        if (array_key_exists('rate', $data) && is_int($data['rate'])) {
            $data['rate'] = (float) $data['rate'];
        }
        if (array_key_exists('value', $data) && is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (array_key_exists('extra_rate', $data) && is_int($data['extra_rate'])) {
            $data['extra_rate'] = (float) $data['extra_rate'];
        }
        if (array_key_exists('extra_value', $data) && is_int($data['extra_value'])) {
            $data['extra_value'] = (float) $data['extra_value'];
        }
        if (array_key_exists('sales_turnover', $data) && is_int($data['sales_turnover'])) {
            $data['sales_turnover'] = (float) $data['sales_turnover'];
        }
        if (array_key_exists('returns_turnover', $data) && is_int($data['returns_turnover'])) {
            $data['returns_turnover'] = (float) $data['returns_turnover'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        if (array_key_exists('symbol', $data)) {
            $object->setSymbol($data['symbol']);
            unset($data['symbol']);
        }
        if (array_key_exists('rate', $data)) {
            $object->setRate($data['rate']);
            unset($data['rate']);
        }
        if (array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (array_key_exists('extra_rate', $data)) {
            $object->setExtraRate($data['extra_rate']);
            unset($data['extra_rate']);
        }
        if (array_key_exists('extra_value', $data)) {
            $object->setExtraValue($data['extra_value']);
            unset($data['extra_value']);
        }
        if (array_key_exists('included', $data)) {
            $object->setIncluded($data['included']);
            unset($data['included']);
        }
        if (array_key_exists('no_vat', $data)) {
            $object->setNoVat($data['no_vat']);
            unset($data['no_vat']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('sales_turnover', $data)) {
            $object->setSalesTurnover($data['sales_turnover']);
            unset($data['sales_turnover']);
        }
        if (array_key_exists('returns_turnover', $data)) {
            $object->setReturnsTurnover($data['returns_turnover']);
            unset($data['returns_turnover']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['symbol'] = $object->getSymbol();
        $data['rate'] = $object->getRate();
        $data['value'] = $object->getValue();
        if ($object->isInitialized('extraRate') && null !== $object->getExtraRate()) {
            $data['extra_rate'] = $object->getExtraRate();
        }
        $data['extra_value'] = $object->getExtraValue();
        $data['included'] = $object->getIncluded();
        if ($object->isInitialized('noVat') && null !== $object->getNoVat()) {
            $data['no_vat'] = $object->getNoVat();
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('salesTurnover') && null !== $object->getSalesTurnover()) {
            $data['sales_turnover'] = $object->getSalesTurnover();
        }
        if ($object->isInitialized('returnsTurnover') && null !== $object->getReturnsTurnover()) {
            $data['returns_turnover'] = $object->getReturnsTurnover();
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
        return [CalculatedReceiptTaxPayload::class => false];
    }
}
