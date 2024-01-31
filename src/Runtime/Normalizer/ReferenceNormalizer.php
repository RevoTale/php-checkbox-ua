<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $ref = [];
        $ref['$ref'] = (string) $object->getReferenceUri();

        return $ref;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Reference;
    }
}
