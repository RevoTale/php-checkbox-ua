<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};

use function array_key_exists;
use function is_array;
use RevoTale\CheckboxUA\Model\CardPaymentPayload;

class CardPaymentPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'RevoTale\\CheckboxUA\\Model\\CardPaymentPayload' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && 'RevoTale\\CheckboxUA\\Model\\CardPaymentPayload' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \RevoTale\CheckboxUA\Model\CardPaymentPayload();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('pawnshop_is_return', $data)) {
            $object->setPawnshopIsReturn($data['pawnshop_is_return']);
            unset($data['pawnshop_is_return']);
        }
        if (array_key_exists('provider_type', $data)) {
            $object->setProviderType($data['provider_type']);
            unset($data['provider_type']);
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (array_key_exists('commission', $data)) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        }
        if (array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        if (array_key_exists('card_mask', $data)) {
            $object->setCardMask($data['card_mask']);
            unset($data['card_mask']);
        }
        if (array_key_exists('bank_name', $data)) {
            $object->setBankName($data['bank_name']);
            unset($data['bank_name']);
        }
        if (array_key_exists('auth_code', $data)) {
            $object->setAuthCode($data['auth_code']);
            unset($data['auth_code']);
        }
        if (array_key_exists('rrn', $data)) {
            $object->setRrn($data['rrn']);
            unset($data['rrn']);
        }
        if (array_key_exists('payment_system', $data)) {
            $object->setPaymentSystem($data['payment_system']);
            unset($data['payment_system']);
        }
        if (array_key_exists('owner_name', $data)) {
            $object->setOwnerName($data['owner_name']);
            unset($data['owner_name']);
        }
        if (array_key_exists('terminal', $data)) {
            $object->setTerminal($data['terminal']);
            unset($data['terminal']);
        }
        if (array_key_exists('acquiring', $data)) {
            $object->setAcquiring($data['acquiring']);
            unset($data['acquiring']);
        }
        if (array_key_exists('acquirer_and_seller', $data)) {
            $object->setAcquirerAndSeller($data['acquirer_and_seller']);
            unset($data['acquirer_and_seller']);
        }
        if (array_key_exists('receipt_no', $data)) {
            $object->setReceiptNo($data['receipt_no']);
            unset($data['receipt_no']);
        }
        if (array_key_exists('signature_required', $data)) {
            $object->setSignatureRequired($data['signature_required']);
            unset($data['signature_required']);
        }
        if (array_key_exists('tapxphone_terminal', $data)) {
            $object->setTapxphoneTerminal($data['tapxphone_terminal']);
            unset($data['tapxphone_terminal']);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('pawnshopIsReturn') && null !== $object->getPawnshopIsReturn()) {
            $data['pawnshop_is_return'] = $object->getPawnshopIsReturn();
        }
        if ($object->isInitialized('providerType') && null !== $object->getProviderType()) {
            $data['provider_type'] = $object->getProviderType();
        }
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        $data['value'] = $object->getValue();
        if ($object->isInitialized('commission') && null !== $object->getCommission()) {
            $data['commission'] = $object->getCommission();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('cardMask') && null !== $object->getCardMask()) {
            $data['card_mask'] = $object->getCardMask();
        }
        if ($object->isInitialized('bankName') && null !== $object->getBankName()) {
            $data['bank_name'] = $object->getBankName();
        }
        if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
            $data['auth_code'] = $object->getAuthCode();
        }
        if ($object->isInitialized('rrn') && null !== $object->getRrn()) {
            $data['rrn'] = $object->getRrn();
        }
        if ($object->isInitialized('paymentSystem') && null !== $object->getPaymentSystem()) {
            $data['payment_system'] = $object->getPaymentSystem();
        }
        if ($object->isInitialized('ownerName') && null !== $object->getOwnerName()) {
            $data['owner_name'] = $object->getOwnerName();
        }
        if ($object->isInitialized('terminal') && null !== $object->getTerminal()) {
            $data['terminal'] = $object->getTerminal();
        }
        if ($object->isInitialized('acquiring') && null !== $object->getAcquiring()) {
            $data['acquiring'] = $object->getAcquiring();
        }
        if ($object->isInitialized('acquirerAndSeller') && null !== $object->getAcquirerAndSeller()) {
            $data['acquirer_and_seller'] = $object->getAcquirerAndSeller();
        }
        if ($object->isInitialized('receiptNo') && null !== $object->getReceiptNo()) {
            $data['receipt_no'] = $object->getReceiptNo();
        }
        if ($object->isInitialized('signatureRequired') && null !== $object->getSignatureRequired()) {
            $data['signature_required'] = $object->getSignatureRequired();
        }
        if ($object->isInitialized('tapxphoneTerminal') && null !== $object->getTapxphoneTerminal()) {
            $data['tapxphone_terminal'] = $object->getTapxphoneTerminal();
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
        return [CardPaymentPayload::class => false];
    }
}
