<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\CalculatedDiscountPayload;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use function is_int;

class CalculatedDiscountPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CalculatedDiscountPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\CalculatedDiscountPayload;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\CalculatedDiscountPayload();
        if (array_key_exists('value', $data) && is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (array_key_exists('sum', $data) && is_int($data['sum'])) {
            $data['sum'] = (float) $data['sum'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('mode', $data)) {
            $object->setMode($data['mode']);
            unset($data['mode']);
        }
        if (array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (array_key_exists('tax_code', $data)) {
            $object->setTaxCode($data['tax_code']);
            unset($data['tax_code']);
        }
        if (array_key_exists('tax_codes', $data)) {
            $object->setTaxCodes($data['tax_codes']);
            unset($data['tax_codes']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('privilege', $data)) {
            $object->setPrivilege($data['privilege']);
            unset($data['privilege']);
        }
        if (array_key_exists('sum', $data)) {
            $object->setSum($data['sum']);
            unset($data['sum']);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['type'] = $object->getType();
        $data['mode'] = $object->getMode();
        $data['value'] = $object->getValue();
        if ($object->isInitialized('taxCode') && null !== $object->getTaxCode()) {
            $data['tax_code'] = $object->getTaxCode();
        }
        if ($object->isInitialized('taxCodes') && null !== $object->getTaxCodes()) {
            $data['tax_codes'] = $object->getTaxCodes();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('privilege') && null !== $object->getPrivilege()) {
            $data['privilege'] = $object->getPrivilege();
        }
        $data['sum'] = $object->getSum();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [CalculatedDiscountPayload::class => false];
    }
}
