<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\ShiftTaxModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;

class ShiftTaxModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ShiftTaxModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\ShiftTaxModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ShiftTaxModel();
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
        if (array_key_exists('extra_rate', $data)) {
            $object->setExtraRate($data['extra_rate']);
            unset($data['extra_rate']);
        }
        if (array_key_exists('included', $data)) {
            $object->setIncluded($data['included']);
            unset($data['included']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('no_vat', $data)) {
            $object->setNoVat($data['no_vat']);
            unset($data['no_vat']);
        }
        if (array_key_exists('advanced_code', $data)) {
            $object->setAdvancedCode($data['advanced_code']);
            unset($data['advanced_code']);
        }
        if (array_key_exists('sales', $data)) {
            $object->setSales($data['sales']);
            unset($data['sales']);
        }
        if (array_key_exists('returns', $data)) {
            $object->setReturns($data['returns']);
            unset($data['returns']);
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

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['symbol'] = $object->getSymbol();
        $data['rate'] = $object->getRate();
        if ($object->isInitialized('extraRate') && null !== $object->getExtraRate()) {
            $data['extra_rate'] = $object->getExtraRate();
        }
        $data['included'] = $object->getIncluded();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('noVat') && null !== $object->getNoVat()) {
            $data['no_vat'] = $object->getNoVat();
        }
        if ($object->isInitialized('advancedCode') && null !== $object->getAdvancedCode()) {
            $data['advanced_code'] = $object->getAdvancedCode();
        }
        $data['sales'] = $object->getSales();
        $data['returns'] = $object->getReturns();
        $data['sales_turnover'] = $object->getSalesTurnover();
        $data['returns_turnover'] = $object->getReturnsTurnover();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [ShiftTaxModel::class => false];
    }
}
