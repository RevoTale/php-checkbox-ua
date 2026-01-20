<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\{CurrencyExchangeSchema, CurrencySchema};
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use function is_int;

class CurrencyExchangeSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CurrencyExchangeSchema' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof CurrencyExchangeSchema;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CurrencyExchangeSchema();
        if (array_key_exists('commission', $data) && is_int($data['commission'])) {
            $data['commission'] = (float) $data['commission'];
        }
        if (array_key_exists('cross', $data) && is_int($data['cross'])) {
            $data['cross'] = (float) $data['cross'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('sell', $data)) {
            $object->setSell($this->denormalizer->denormalize($data['sell'], CurrencySchema::class, 'json', $context));
            unset($data['sell']);
        }
        if (array_key_exists('buy', $data)) {
            $object->setBuy($this->denormalizer->denormalize($data['buy'], CurrencySchema::class, 'json', $context));
            unset($data['buy']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('reversal', $data)) {
            $object->setReversal($data['reversal']);
            unset($data['reversal']);
        }
        if (array_key_exists('client_info', $data)) {
            $object->setClientInfo($data['client_info']);
            unset($data['client_info']);
        }
        if (array_key_exists('commission', $data)) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        }
        if (array_key_exists('cross', $data)) {
            $object->setCross($data['cross']);
            unset($data['cross']);
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
        if ($object->isInitialized('sell') && null !== $object->getSell()) {
            $data['sell'] = $this->normalizer->normalize($object->getSell(), 'json', $context);
        }
        if ($object->isInitialized('buy') && null !== $object->getBuy()) {
            $data['buy'] = $this->normalizer->normalize($object->getBuy(), 'json', $context);
        }
        $data['type'] = $object->getType();
        if ($object->isInitialized('reversal') && null !== $object->getReversal()) {
            $data['reversal'] = $object->getReversal();
        }
        if ($object->isInitialized('clientInfo') && null !== $object->getClientInfo()) {
            $data['client_info'] = $object->getClientInfo();
        }
        if ($object->isInitialized('commission') && null !== $object->getCommission()) {
            $data['commission'] = $object->getCommission();
        }
        if ($object->isInitialized('cross') && null !== $object->getCross()) {
            $data['cross'] = $object->getCross();
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
        return [CurrencyExchangeSchema::class => false];
    }
}
