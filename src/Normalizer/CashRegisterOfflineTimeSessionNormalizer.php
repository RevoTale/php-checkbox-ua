<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
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
use function is_int;

class CashRegisterOfflineTimeSessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterOfflineTimeSession' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterOfflineTimeSession' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\CheckboxUA\Model\CashRegisterOfflineTimeSession();
        if (array_key_exists('duration', $data) && is_int($data['duration'])) {
            $data['duration'] = (float) $data['duration'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('start', $data)) {
            $object->setStart(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['start']));
            unset($data['start']);
        }
        if (array_key_exists('end', $data)) {
            $object->setEnd(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['end']));
            unset($data['end']);
        }
        if (array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
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
        if ($object->isInitialized('start') && null !== $object->getStart()) {
            $data['start'] = $object->getStart()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('end') && null !== $object->getEnd()) {
            $data['end'] = $object->getEnd()->format('Y-m-d\\TH:i:s.uP');
        }
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
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
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterOfflineTimeSession' => false];
    }
}
