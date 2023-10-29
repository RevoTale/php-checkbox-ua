<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
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

class OrganizationReceiptConfigSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrganizationReceiptConfigSchema' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrganizationReceiptConfigSchema' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\OrganizationReceiptConfigSchema();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('text_global_header', $data)) {
            $object->setTextGlobalHeader($data['text_global_header']);
            unset($data['text_global_header']);
        }
        if (array_key_exists('text_global_footer', $data)) {
            $object->setTextGlobalFooter($data['text_global_footer']);
            unset($data['text_global_footer']);
        }
        if (array_key_exists('html_title', $data)) {
            $object->setHtmlTitle($data['html_title']);
            unset($data['html_title']);
        }
        if (array_key_exists('email_subject', $data)) {
            $object->setEmailSubject($data['email_subject']);
            unset($data['email_subject']);
        }
        if (array_key_exists('html_global_header', $data)) {
            $object->setHtmlGlobalHeader($data['html_global_header']);
            unset($data['html_global_header']);
        }
        if (array_key_exists('html_global_footer', $data)) {
            $object->setHtmlGlobalFooter($data['html_global_footer']);
            unset($data['html_global_footer']);
        }
        if (array_key_exists('html_body_style', $data)) {
            $object->setHtmlBodyStyle($data['html_body_style']);
            unset($data['html_body_style']);
        }
        if (array_key_exists('html_receipt_style', $data)) {
            $object->setHtmlReceiptStyle($data['html_receipt_style']);
            unset($data['html_receipt_style']);
        }
        if (array_key_exists('html_ruler_style', $data)) {
            $object->setHtmlRulerStyle($data['html_ruler_style']);
            unset($data['html_ruler_style']);
        }
        if (array_key_exists('html_light_block_style', $data)) {
            $object->setHtmlLightBlockStyle($data['html_light_block_style']);
            unset($data['html_light_block_style']);
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ShortOrganizationModel', 'json', $context));
            unset($data['organization']);
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
        if ($object->isInitialized('textGlobalHeader') && null !== $object->getTextGlobalHeader()) {
            $data['text_global_header'] = $object->getTextGlobalHeader();
        }
        if ($object->isInitialized('textGlobalFooter') && null !== $object->getTextGlobalFooter()) {
            $data['text_global_footer'] = $object->getTextGlobalFooter();
        }
        if ($object->isInitialized('htmlTitle') && null !== $object->getHtmlTitle()) {
            $data['html_title'] = $object->getHtmlTitle();
        }
        if ($object->isInitialized('emailSubject') && null !== $object->getEmailSubject()) {
            $data['email_subject'] = $object->getEmailSubject();
        }
        if ($object->isInitialized('htmlGlobalHeader') && null !== $object->getHtmlGlobalHeader()) {
            $data['html_global_header'] = $object->getHtmlGlobalHeader();
        }
        if ($object->isInitialized('htmlGlobalFooter') && null !== $object->getHtmlGlobalFooter()) {
            $data['html_global_footer'] = $object->getHtmlGlobalFooter();
        }
        if ($object->isInitialized('htmlBodyStyle') && null !== $object->getHtmlBodyStyle()) {
            $data['html_body_style'] = $object->getHtmlBodyStyle();
        }
        if ($object->isInitialized('htmlReceiptStyle') && null !== $object->getHtmlReceiptStyle()) {
            $data['html_receipt_style'] = $object->getHtmlReceiptStyle();
        }
        if ($object->isInitialized('htmlRulerStyle') && null !== $object->getHtmlRulerStyle()) {
            $data['html_ruler_style'] = $object->getHtmlRulerStyle();
        }
        if ($object->isInitialized('htmlLightBlockStyle') && null !== $object->getHtmlLightBlockStyle()) {
            $data['html_light_block_style'] = $object->getHtmlLightBlockStyle();
        }
        $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Vendor\\Library\\Generated\\CheckboxUA\\Model\\OrganizationReceiptConfigSchema' => false];
    }
}
