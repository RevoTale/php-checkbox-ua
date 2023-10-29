<?php

namespace Vendor\Library\Generated\CheckboxUA\Endpoint;

class CreateShiftApiV1ShiftsPost extends \Vendor\Library\Generated\CheckboxUA\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\CheckboxUA\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\CheckboxUA\Runtime\Client\EndpointTrait;

    /**
     * Відкриття нової зміни касиром.
     *
     * Для створення зміни необхідно вказати ключ ліцензії конкретного пРРО розташованого в тій же торговій точці, що знаходиться касир.
     *
     * Створюється об'єкт зміни в стані "CREATED" та транзакція відкриття зміни (поле "initial_transaction").
     *
     * Для переведення зміни в статус OPENED необхідно щоб транзакція була підписана за допомогою КЕП та доставлена в ДПС,
     * це як правило триває декілька секунд.
     *
     * Після створення запиту необхідно відслідковувати статус зміни доки він не змінить на OPENED або CLOSED.
     *
     * Статус зміни можна відслідковувати за допомогою GET запиту по шляху /api/v1/shifts/{shift_id},
     * де {shift_id} - ідентифікатор зміни.
     * Або /api/v1/cashier/shift
     *
     * У разі, якщо зміна перейшла у статус CLOSED - це значить, що зміна не може бути відкрита.
     * Деталізація причини відмови у створенні зміни знаходиться в полі initial_transaciton.
     *
     * Після того як робочу зміну буде успішно відкрито можна її закрити або створювати чеки.
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
    public function __construct(\Vendor\Library\Generated\CheckboxUA\Model\CreateShiftPayload $requestBody = null, array $headerParameters = [])
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
        return '/api/v1/shifts';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\CheckboxUA\Model\CreateShiftPayload) {
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
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ShiftWithCashierAndCashRegister
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateShiftApiV1ShiftsPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\ShiftWithCashierAndCashRegister', 'json');
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Vendor\Library\Generated\CheckboxUA\Exception\CreateShiftApiV1ShiftsPostUnprocessableEntityException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\CheckboxUA\\Model\\HTTPValidationError', 'json'), $response);
        }
        throw new \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['Cashier JWT token'];
    }
}
