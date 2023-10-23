<?php

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
use function is_array;
use function is_int;

class ExtendedTaxModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ExtendedTaxModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ExtendedTaxModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ExtendedTaxModel();
        if (array_key_exists('rate', $data) && is_int($data['rate'])) {
            $data['rate'] = (float)$data['rate'];
        }
        if (array_key_exists('extra_rate', $data) && is_int($data['extra_rate'])) {
            $data['extra_rate'] = (float)$data['extra_rate'];
        }
        if (array_key_exists('decimal_rate', $data) && is_int($data['decimal_rate'])) {
            $data['decimal_rate'] = (float)$data['decimal_rate'];
        }
        if (array_key_exists('decimal_extra_rate', $data) && is_int($data['decimal_extra_rate'])) {
            $data['decimal_extra_rate'] = (float)$data['decimal_extra_rate'];
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
            $object->setUpdatedAt($data['updated_at'] === null ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
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
        if (array_key_exists('decimal_rate', $data)) {
            $object->setDecimalRate($data['decimal_rate']);
            unset($data['decimal_rate']);
        }
        if (array_key_exists('decimal_extra_rate', $data)) {
            $object->setDecimalExtraRate($data['decimal_extra_rate']);
            unset($data['decimal_extra_rate']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
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
        if ($object->isInitialized('decimalRate') && null !== $object->getDecimalRate()) {
            $data['decimal_rate'] = $object->getDecimalRate();
        }
        if ($object->isInitialized('decimalExtraRate') && null !== $object->getDecimalExtraRate()) {
            $data['decimal_extra_rate'] = $object->getDecimalExtraRate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\ExtendedTaxModel' => false];
    }
}
