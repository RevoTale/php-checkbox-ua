<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\ReportTaxesModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use function is_int;

class ReportTaxesModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\ReportTaxesModel' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data instanceof \RevoTale\CheckboxUA\Model\ReportTaxesModel;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\ReportTaxesModel();
        if (array_key_exists('rate', $data) && is_int($data['rate'])) {
            $data['rate'] = (float) $data['rate'];
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
        if (array_key_exists('sell_sum', $data)) {
            $object->setSellSum($data['sell_sum']);
            unset($data['sell_sum']);
        }
        if (array_key_exists('return_sum', $data)) {
            $object->setReturnSum($data['return_sum']);
            unset($data['return_sum']);
        }
        if (array_key_exists('sales_turnover', $data)) {
            $object->setSalesTurnover($data['sales_turnover']);
            unset($data['sales_turnover']);
        }
        if (array_key_exists('returns_turnover', $data)) {
            $object->setReturnsTurnover($data['returns_turnover']);
            unset($data['returns_turnover']);
        }
        if (array_key_exists('no_vat', $data)) {
            $object->setNoVat($data['no_vat']);
            unset($data['no_vat']);
        }
        if (array_key_exists('advanced_code', $data)) {
            $object->setAdvancedCode($data['advanced_code']);
            unset($data['advanced_code']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['created_at']));
            unset($data['created_at']);
        }
        if (array_key_exists('setup_date', $data)) {
            $object->setSetupDate(DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['setup_date']));
            unset($data['setup_date']);
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
        $data['id'] = $object->getId();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['symbol'] = $object->getSymbol();
        $data['rate'] = $object->getRate();
        $data['sell_sum'] = $object->getSellSum();
        $data['return_sum'] = $object->getReturnSum();
        $data['sales_turnover'] = $object->getSalesTurnover();
        $data['returns_turnover'] = $object->getReturnsTurnover();
        if ($object->isInitialized('noVat') && null !== $object->getNoVat()) {
            $data['no_vat'] = $object->getNoVat();
        }
        if ($object->isInitialized('advancedCode') && null !== $object->getAdvancedCode()) {
            $data['advanced_code'] = $object->getAdvancedCode();
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        $data['setup_date'] = $object->getSetupDate()->format('Y-m-d\\TH:i:s.uP');
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ReportTaxesModel::class => false];
    }
}
