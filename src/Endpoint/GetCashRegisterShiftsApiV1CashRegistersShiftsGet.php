<?php

namespace RevoTale\CheckboxUA\Endpoint;

class GetCashRegisterShiftsApiV1CashRegistersShiftsGet extends \RevoTale\CheckboxUA\Runtime\Client\BaseEndpoint implements \RevoTale\CheckboxUA\Runtime\Client\Endpoint
{
    use \RevoTale\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Отримання змін по касі.
     *
     * @param array $queryParameters {
     *
     * @var array $statuses Статус зміни
     * @var bool  $desc Зворотній порядок сортування
     * @var int   $limit
     * @var int   $offset
     *            }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/v1/cash-registers/shifts';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['statuses', 'desc', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['desc' => false, 'limit' => 25, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('statuses', ['array']);
        $optionsResolver->addAllowedTypes('desc', ['bool']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);

        return $optionsResolver;
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
     * @return \RevoTale\CheckboxUA\Model\PaginatedResultShiftModel
     *
     * @throws \RevoTale\CheckboxUA\Exception\GetCashRegisterShiftsApiV1CashRegistersShiftsGetUnprocessableEntityException
     * @throws \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\PaginatedResultShiftModel', 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \RevoTale\CheckboxUA\Exception\GetCashRegisterShiftsApiV1CashRegistersShiftsGetUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
