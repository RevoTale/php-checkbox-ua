<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Endpoint;

use RevoTale\CheckboxUA\Model\HTTPValidationError;

class AskOfflineCodesApiV1CashRegistersAskOfflineCodesGet extends \RevoTale\CheckboxUA\Runtime\Client\BaseEndpoint implements \RevoTale\CheckboxUA\Runtime\Client\Endpoint
{
    use \RevoTale\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Асинхронний або синхронний (керується параметром sync - значення False (default) або True)
     * запит на оновлення списку фіскальних номерів для офлайн режиму для вказаного касового реєстратора.
     * Ключ ліцензії реєстратора передається в заголовку X-License-Key.
     * В результаті виклику ініціюється запит за номерами до серверу ДПС. Отримані номери зберігаються в базі
     * транзакційного процесингу, і стають доступними для отримання методом get-offline-codes. Важливо - номер перестає
     * повертатися сервером ДПС (вважається "використаним") лише після відправки до ДПС чеку з цим номером. До того ДПС
     * повертає цей номер при кожному виклику.
     * Наприклад, зробивши до ДПС перший запит на 100 номерів, отримаємо 100 нових вільних фіскальних номерів для
     * відповідного реєстратора. Але зробивши після цього запит ще на 200 номерів, отримаємо 100 тих самих номерів та
     * ще 100 наступних за ними.
     * Виклик можна робити лише тоді, коли касовий реєстратор знаходиться в онлайн режимі.
     *
     * @param array $queryParameters {
     *
     * @var int  $count Number of codes to get
     * @var bool $sync
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
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
        return '/api/v1/cash-registers/ask-offline-codes';
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
        $optionsResolver->setDefined(['count', 'sync']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['count' => 150, 'sync' => false]);
        $optionsResolver->addAllowedTypes('count', ['int']);
        $optionsResolver->addAllowedTypes('sync', ['bool']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Client-Name', 'X-Client-Version', 'X-Access-Key', 'X-Device-ID', 'X-License-Key']);
        $optionsResolver->setRequired(['X-License-Key']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Client-Name', ['string']);
        $optionsResolver->addAllowedTypes('X-Client-Version', ['string']);
        $optionsResolver->addAllowedTypes('X-Access-Key', ['string']);
        $optionsResolver->addAllowedTypes('X-Device-ID', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \RevoTale\CheckboxUA\Exception\AskOfflineCodesApiV1CashRegistersAskOfflineCodesGetUnprocessableEntityException
     * @throws \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \RevoTale\CheckboxUA\Exception\AskOfflineCodesApiV1CashRegistersAskOfflineCodesGetUnprocessableEntityException($serializer->deserialize($body, HTTPValidationError::class, 'json'), $response);
        }
        throw new \RevoTale\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
