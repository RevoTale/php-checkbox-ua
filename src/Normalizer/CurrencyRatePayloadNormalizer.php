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

class CurrencyRatePayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CurrencyRatePayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CurrencyRatePayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\CurrencyRatePayload();
        if (array_key_exists('sell', $data) && is_int($data['sell'])) {
            $data['sell'] = (float) $data['sell'];
        }
        if (array_key_exists('buy', $data) && is_int($data['buy'])) {
            $data['buy'] = (float) $data['buy'];
        }
        if (array_key_exists('regulator', $data) && is_int($data['regulator'])) {
            $data['regulator'] = (float) $data['regulator'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (array_key_exists('symbol_code', $data)) {
            $object->setSymbolCode($data['symbol_code']);
            unset($data['symbol_code']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('sell', $data)) {
            $object->setSell($data['sell']);
            unset($data['sell']);
        }
        if (array_key_exists('buy', $data)) {
            $object->setBuy($data['buy']);
            unset($data['buy']);
        }
        if (array_key_exists('regulator', $data)) {
            $object->setRegulator($data['regulator']);
            unset($data['regulator']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
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
        $data['code'] = $object->getCode();
        if ($object->isInitialized('symbolCode') && null !== $object->getSymbolCode()) {
            $data['symbol_code'] = $object->getSymbolCode();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $data['sell'] = $object->getSell();
        $data['buy'] = $object->getBuy();
        $data['regulator'] = $object->getRegulator();
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\CurrencyRatePayload' => false];
    }
}
