<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Endpoint;

class GetSearchReportsApiV1ReportsSearchGet extends \Vendor\Library\Generated\CheckboxUA\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\CheckboxUA\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Отримання звітів (X та Z) по обраним касам
     *
     * @param array $queryParameters {
     *
     * @var string $from_date
     * @var string $to_date
     * @var array  $shift_id
     * @var int    $serial
     * @var bool   $is_z_report
     * @var bool   $desc
     * @var array  $cash_register_id
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
        return '/api/v1/reports/search';
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
        $optionsResolver->setDefined(['from_date', 'to_date', 'shift_id', 'serial', 'is_z_report', 'desc', 'cash_register_id', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['desc' => false, 'cash_register_id' => [], 'limit' => 25, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('from_date', ['string']);
        $optionsResolver->addAllowedTypes('to_date', ['string']);
        $optionsResolver->addAllowedTypes('shift_id', ['array']);
        $optionsResolver->addAllowedTypes('serial', ['int']);
        $optionsResolver->addAllowedTypes('is_z_report', ['bool']);
        $optionsResolver->addAllowedTypes('desc', ['bool']);
        $optionsResolver->addAllowedTypes('cash_register_id', ['array']);
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
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultReportModel
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetSearchReportsApiV1ReportsSearchGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\PaginatedResultReportModel', 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Vendor\Library\Generated\CheckboxUA\Exception\GetSearchReportsApiV1ReportsSearchGetUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
