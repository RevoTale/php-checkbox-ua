<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\CurrencyRateModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use function is_int;

class CurrencyRateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CurrencyRateModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\CurrencyRateModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\CurrencyRateModel();
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
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(null === $data['updated_at'] ? null : DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (array_key_exists('sell_sum', $data)) {
            $object->setSellSum($data['sell_sum']);
            unset($data['sell_sum']);
        }
        if (array_key_exists('buy_sum', $data)) {
            $object->setBuySum($data['buy_sum']);
            unset($data['buy_sum']);
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
        $data['symbol_code'] = $object->getSymbolCode();
        $data['name'] = $object->getName();
        $data['sell'] = $object->getSell();
        $data['buy'] = $object->getBuy();
        $data['regulator'] = $object->getRegulator();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        }
        $data['active'] = $object->getActive();
        if ($object->isInitialized('sellSum') && null !== $object->getSellSum()) {
            $data['sell_sum'] = $object->getSellSum();
        }
        if ($object->isInitialized('buySum') && null !== $object->getBuySum()) {
            $data['buy_sum'] = $object->getBuySum();
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
        return [CurrencyRateModel::class => false];
    }
}
