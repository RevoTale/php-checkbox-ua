<?php

namespace RevoTale\CheckboxUA\Endpoint;

class SetWebhookApiV1WebhookPost extends \RevoTale\CheckboxUA\Runtime\Client\BaseEndpoint implements \RevoTale\CheckboxUA\Runtime\Client\Endpoint
{
    use \RevoTale\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Даним методом встановлюється URL адреса куди при фіскалізації чеків, відкритті та закритті змін
     * а також службових внесеннях та вилученнях буде надіслано POST запити з відповідною інформацією.
     *
     * Налаштування зберігаються для кожної каси окремо.
     *
     * Указана в даному запиті адреса повинна приймати POST запити із указаною в документації схемою
     * та повертати статус-код 200, у разі якщо статус-код буде >= 400 або час очікування відповіді
     * більше 10 секунд запит буде повтрорюватись протягом 4-х годин з експоненційним інтервалом
     * (backoff-retry, збільшення від 1 секунди до 30 хвилин)
     *
     * Під час встановлення налаштувань сервером CheckBox генерується секретний ключ та повертається у
     * відповіді на даний метод, за допомогою цього ключа можна перевірити чи дійсно запит
     * виконується серверами CheckBox.
     *
     * Під час виконання виклику вебхуків тіло запиту хешується за допомогою алгоритму:
     * ```
     * encodeBase64(
     * HmacSHA256(
     * secret_key,
     * getBytesUTF-8(
     * request_body
     * )
     * )
     * )
     * ```
     * - `encodeBase64` - функція перетворення бінарних даних в Base64 формат [wiki](https://ru.wikipedia.org/wiki/Base64),
     * - `HmacSHA256` - функция створення хешу підпису даних [wiki](https://ru.wikipedia.org/wiki/HMAC),
     * - `getBytesUTF-8` - функция перетворення рядка в бінарне представлення (в кодуванні UTF-8) [wiki](https://ru.wikipedia.org/wiki/UTF-8),
     * - `request_body` - тіло запиту
     * - `secret_key` - секретний ключ
     *
     * з використання ключа та записується до заголовку `x-request-signature`,
     * таким чином на стороні де отримується запит можна перевірити дійсність даних за тим же алгоритмом.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     */
    public function __construct(\RevoTale\CheckboxUA\Model\SetWebhookPayload $requestBody, array $headerParameters = [])
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
        return '/api/v1/webhook';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \RevoTale\CheckboxUA\Model\SetWebhookPayload) {
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
        $optionsResolver->setDefined(['X-Client-Name', 'X-Client-Version', 'X-Access-Key', 'X-License-Key']);
        $optionsResolver->setRequired(['X-License-Key']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Client-Name', ['string']);
        $optionsResolver->addAllowedTypes('X-Client-Version', ['string']);
        $optionsResolver->addAllowedTypes('X-Access-Key', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \RevoTale\CheckboxUA\Model\WebhookInfoResponseSchema
     *
     * @throws \RevoTale\CheckboxUA\Exception\SetWebhookApiV1WebhookPostUnprocessableEntityException
     * @throws \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\WebhookInfoResponseSchema', 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \RevoTale\CheckboxUA\Exception\SetWebhookApiV1WebhookPostUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
