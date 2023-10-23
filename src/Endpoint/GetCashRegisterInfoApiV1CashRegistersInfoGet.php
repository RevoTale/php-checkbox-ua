<?php

namespace RevoTale\CheckboxUA\Endpoint;

class GetCashRegisterInfoApiV1CashRegistersInfoGet extends \RevoTale\CheckboxUA\Runtime\Client\BaseEndpoint implements \RevoTale\CheckboxUA\Runtime\Client\Endpoint
{
    use \RevoTale\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Отримання інформації про пРРО за ключем ліцензії. Необхідно для агенту РРО.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/v1/cash-registers/info';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Client-Name', 'X-Client-Version', 'X-Access-Key', 'X-License-Key']);
        $optionsResolver->setRequired(['X-License-Key']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Client-Name', ['string']);
        $optionsResolver->addAllowedTypes('X-Client-Version', ['string']);
        $optionsResolver->addAllowedTypes('X-Access-Key', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \RevoTale\CheckboxUA\Model\CashRegisterDeviceModel
     *
     * @throws \RevoTale\CheckboxUA\Exception\GetCashRegisterInfoApiV1CashRegistersInfoGetUnprocessableEntityException
     * @throws \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashRegisterDeviceModel', 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \RevoTale\CheckboxUA\Exception\GetCashRegisterInfoApiV1CashRegistersInfoGetUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
