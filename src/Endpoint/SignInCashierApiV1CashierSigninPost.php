<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Endpoint;

class SignInCashierApiV1CashierSigninPost extends \Vendor\Library\Generated\CheckboxUA\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\CheckboxUA\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Вхід користувача (касира) за допомогою логіна та паролю.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     */
    public function __construct(\Vendor\Library\Generated\CheckboxUA\Model\CashierSignIn $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/api/v1/cashier/signin';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\CheckboxUA\Model\CashierSignIn) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Client-Name', 'X-Client-Version', 'X-Access-Key', 'X-Device-ID']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Client-Name', ['string']);
        $optionsResolver->addAllowedTypes('X-Client-Version', ['string']);
        $optionsResolver->addAllowedTypes('X-Access-Key', ['string']);
        $optionsResolver->addAllowedTypes('X-Device-ID', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CashierAccessTokenResponseModel
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierApiV1CashierSigninPostForbiddenException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierApiV1CashierSigninPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\CashierAccessTokenResponseModel', 'json');
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierApiV1CashierSigninPostForbiddenException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPError', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierApiV1CashierSigninPostUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
