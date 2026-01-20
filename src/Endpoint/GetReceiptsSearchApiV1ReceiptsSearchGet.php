<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Endpoint;

use RevoTale\CheckboxUA\Model\{HTTPValidationError, PaginatedResultReceiptModel};

class GetReceiptsSearchApiV1ReceiptsSearchGet extends \RevoTale\CheckboxUA\Runtime\Client\BaseEndpoint implements \RevoTale\CheckboxUA\Runtime\Client\Endpoint
{
    use \RevoTale\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Отримання списку чеків за параметрами фільтрів.
     *
     * @param array $queryParameters {
     *
     * @var string $fiscal_code Фіскальний номер чека
     * @var string $barcode Пошук за штрихкодом чеку
     * @var array  $shift_id Фільтрування зміни
     * @var array  $branch_id Фільтрування торгової точки
     * @var array  $cash_register_id Фільтрування каси
     * @var string $stock_code Фільтрування по коду складу
     * @var string $from_date Чеки починаючи з дати
     * @var string $to_date Чеки раніше обраної дати
     * @var bool   $desc Зворотній порядок сортування
     * @var bool   $self_receipts Показувати тільки власні чеки
     * @var int    $limit
     * @var int    $offset
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
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
        return '/api/v1/receipts/search';
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
        $optionsResolver->setDefined(['fiscal_code', 'barcode', 'shift_id', 'branch_id', 'cash_register_id', 'stock_code', 'from_date', 'to_date', 'desc', 'self_receipts', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['desc' => false, 'self_receipts' => true, 'limit' => 25, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('fiscal_code', ['string']);
        $optionsResolver->addAllowedTypes('barcode', ['string']);
        $optionsResolver->addAllowedTypes('shift_id', ['array']);
        $optionsResolver->addAllowedTypes('branch_id', ['array']);
        $optionsResolver->addAllowedTypes('cash_register_id', ['array']);
        $optionsResolver->addAllowedTypes('stock_code', ['string']);
        $optionsResolver->addAllowedTypes('from_date', ['string']);
        $optionsResolver->addAllowedTypes('to_date', ['string']);
        $optionsResolver->addAllowedTypes('desc', ['bool']);
        $optionsResolver->addAllowedTypes('self_receipts', ['bool']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Client-Name', 'X-Client-Version', 'X-Access-Key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Client-Name', ['string']);
        $optionsResolver->addAllowedTypes('X-Client-Version', ['string']);
        $optionsResolver->addAllowedTypes('X-Access-Key', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \RevoTale\CheckboxUA\Model\PaginatedResultReceiptModel
     *
     * @throws \RevoTale\CheckboxUA\Exception\GetReceiptsSearchApiV1ReceiptsSearchGetUnprocessableEntityException
     * @throws \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, PaginatedResultReceiptModel::class, 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \RevoTale\CheckboxUA\Exception\GetReceiptsSearchApiV1ReceiptsSearchGetUnprocessableEntityException($serializer->deserialize($body, HTTPValidationError::class, 'json'), $response);
        }
        throw new \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
