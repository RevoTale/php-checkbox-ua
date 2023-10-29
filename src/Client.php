<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA;

class Client extends \Vendor\Library\Generated\CheckboxUA\Runtime\Client\Client
{
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CashierAccessTokenResponseModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierApiV1CashierSigninPostForbiddenException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierApiV1CashierSigninPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function signInCashierApiV1CashierSigninPost(Model\CashierSignIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SignInCashierApiV1CashierSigninPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Вхід користувача (касира) за допомогою пін-коду. Необхідно для касових реєстраторів типу "AGENT".
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CashierAccessTokenResponseModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierViaPinCodeApiV1CashierSigninPinCodePostForbiddenException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignInCashierViaPinCodeApiV1CashierSigninPinCodePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function signInCashierViaPinCodeApiV1CashierSigninPinCodePost(Model\CashierSignInPinCode $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SignInCashierViaPinCodeApiV1CashierSigninPinCodePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Завершення сесії користувача (касира) з поточним токеном доступу.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SignOutCashierApiV1CashierSignoutPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function signOutCashierApiV1CashierSignoutPost(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SignOutCashierApiV1CashierSignoutPost($headerParameters), $fetch);
    }

    /**
     * Отримання інформації про поточного користувача (касира).
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\DetailedCashierModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCashierProfileApiV1CashierMeGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCashierProfileApiV1CashierMeGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCashierProfileApiV1CashierMeGet($headerParameters), $fetch);
    }

    /**
     * Отримання інформації про активну зміну користувача (касира).
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ShiftWithCashRegisterModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCashierShiftApiV1CashierShiftGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCashierShiftApiV1CashierShiftGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCashierShiftApiV1CashierShiftGet($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CashierSignatureStatus|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CheckSignatureApiV1CashierCheckSignatureGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function checkSignatureApiV1CashierCheckSignatureGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CheckSignatureApiV1CashierCheckSignatureGet($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OrganizationReceiptConfigSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCurrentOrganizationReceiptSettingsApiV1OrganizationReceiptConfigGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCurrentOrganizationReceiptSettingsApiV1OrganizationReceiptConfigGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCurrentOrganizationReceiptSettingsApiV1OrganizationReceiptConfigGet($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCurrentOrganizationLogoApiV1OrganizationLogoPngGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCurrentOrganizationLogoApiV1OrganizationLogoPngGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCurrentOrganizationLogoApiV1OrganizationLogoPngGet($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCurrentOrganizationTextLogoApiV1OrganizationTextLogoPngGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCurrentOrganizationTextLogoApiV1OrganizationTextLogoPngGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCurrentOrganizationTextLogoApiV1OrganizationTextLogoPngGet($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OrganizationBillingSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCurrentOrganizationSmsBillingBalanceApiV1OrganizationSmsBillingGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCurrentOrganizationSmsBillingBalanceApiV1OrganizationSmsBillingGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCurrentOrganizationSmsBillingBalanceApiV1OrganizationSmsBillingGet($headerParameters), $fetch);
    }

    /**
     * Ручне переведення поточної каси в онлайн. Ініціює відправку до ДПС всіх транзакцій по даній касі, створених в оффлайн.
     * Першою повинна бути транзакція "перехід в оффлайн" (транзакції вибираються в порядку створення, отже її дата та час
     * створення повинні бути найменшими). Каса переходить в онлайн лише після вдалої відправки всіх транзакцій.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GoOnlineActionApiV1CashRegistersGoOnlinePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function goOnlineActionApiV1CashRegistersGoOnlinePost(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GoOnlineActionApiV1CashRegistersGoOnlinePost($headerParameters), $fetch);
    }

    /**
     * Ручне переведення поточної каси в офлайн. Після виклику цього методу при наступній відправці чеків спроби перевірки
     * зв'язку з ДПС виконуватися не будуть - для переведення каси в онлайн та відправки ланцюжка чеків потрібно буде
     * викликати метод go-online.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GoOfflineActionApiV1CashRegistersGoOfflinePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function goOfflineActionApiV1CashRegistersGoOfflinePost(Model\GoOfflinePayload $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GoOfflineActionApiV1CashRegistersGoOfflinePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Перевірка зв'язку з ДПС. При наявності зв'язку повертає статус DONE.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\PingTaxServiceActionApiV1CashRegistersPingTaxServicePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function pingTaxServiceActionApiV1CashRegistersPingTaxServicePost(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\PingTaxServiceActionApiV1CashRegistersPingTaxServicePost($headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\AskOfflineCodesApiV1CashRegistersAskOfflineCodesGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function askOfflineCodesApiV1CashRegistersAskOfflineCodesGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\AskOfflineCodesApiV1CashRegistersAskOfflineCodesGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Синхронне отримання списку доступних для використання фіскальних номерів для офлайн режиму
     * для активного касового реєстратора. Номери отримуються з бази транзакційного процесингу, якщо вони там є.
     * В цю базу вони потрапляють в результаті виклику метода ask-offline-codes.
     * Номер вважається використаним транзакційним процесингом, якщо отримано чек з цим номером. Тобто повторні запити на
     * отримання номерів будуть повертати ті самі набори, якщо між ними не було передачі чеків.
     *
     * @param array $queryParameters {
     *
     * @var int $count Maximal number of codes to get
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\DetailedOfflineFiscalCodeModel[]|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetOfflineCodesApiV1CashRegistersGetOfflineCodesGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getOfflineCodesApiV1CashRegistersGetOfflineCodesGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetOfflineCodesApiV1CashRegistersGetOfflineCodesGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримання кількості офлайн кодів.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OfflineCodesCountSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetOfflineCodesCountApiV1CashRegistersGetOfflineCodesCountGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getOfflineCodesCountApiV1CashRegistersGetOfflineCodesCountGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetOfflineCodesCountApiV1CashRegistersGetOfflineCodesCountGet($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from_date Час офлайн починаючи від дати
     * @var string $to_date Час офлайн закінчуючи до дати
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CashRegisterOfflineTime|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetOfflineTimeApiV1CashRegistersGetOfflineTimeGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getOfflineTimeApiV1CashRegistersGetOfflineTimeGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetOfflineTimeApiV1CashRegistersGetOfflineTimeGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримання переліку доступних пРРО.
     *
     * @param array $queryParameters {
     *
     * @var bool   $in_use
     * @var string $fiscal_number
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultDetailedCashRegisterModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCashRegistersApiV1CashRegistersGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCashRegistersApiV1CashRegistersGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCashRegistersApiV1CashRegistersGet($queryParameters, $headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CashRegisterDeviceModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCashRegisterInfoApiV1CashRegistersInfoGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCashRegisterInfoApiV1CashRegistersInfoGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCashRegisterInfoApiV1CashRegistersInfoGet($headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultShiftModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCashRegisterShiftsApiV1CashRegistersShiftsGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCashRegisterShiftsApiV1CashRegistersShiftsGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCashRegisterShiftsApiV1CashRegistersShiftsGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримання інформації про пРРО.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\DetailedCashRegisterModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCashRegisterApiV1CashRegistersCashRegisterIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCashRegisterApiV1CashRegistersCashRegisterIdGet(string $cashRegisterId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCashRegisterApiV1CashRegistersCashRegisterIdGet($cashRegisterId, $headerParameters), $fetch);
    }

    /**
     * Отримання змін поточного касира.
     *
     * @param array $queryParameters {
     *
     * @var array  $statuses Статус зміни
     * @var bool   $desc Зворотній порядок сортування
     * @var string $from_date
     * @var string $to_date
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultShiftWithCashRegisterModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetShiftsApiV1ShiftsGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getShiftsApiV1ShiftsGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetShiftsApiV1ShiftsGet($queryParameters, $headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ShiftWithCashierAndCashRegister|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateShiftApiV1ShiftsPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createShiftApiV1ShiftsPost(Model\CreateShiftPayload $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateShiftApiV1ShiftsPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Отримання інформації про зміну.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ShiftWithCashierAndCashRegister|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetShiftApiV1ShiftsShiftIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getShiftApiV1ShiftsShiftIdGet(string $shiftId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetShiftApiV1ShiftsShiftIdGet($shiftId, $headerParameters), $fetch);
    }

    /**
     * Закриття зміни старшим касиром
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ShiftWithCashierAndCashRegister|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CloseShiftBySeniorCashierApiV1ShiftsShiftIdClosePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function closeShiftBySeniorCashierApiV1ShiftsShiftIdClosePost(string $shiftId, Model\ShortCloseShiftPayload $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CloseShiftBySeniorCashierApiV1ShiftsShiftIdClosePost($shiftId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Створення Z-Звіту та закриття поточної зміни користувачем (касиром).
     *
     * Стан зміни встановлюється як "CLOSING" та створюється транзакція закриття зміни (поле "closing_transaction").
     *
     * Для переведення зміни в статус CLOSED необхідно щоб транзакція була підписана за допомогою КЕП та доставлена в ДПС.
     *
     * Статус зміни можна відслідковувати за допомогою GET запиту по шляху /api/v1/shifts/{shift_id},
     * де {shift_id} - ідентифікатор зміни.
     *
     * Після закриття зміни в її рамках більше не можливо буде виконувати дії.
     * Для продовження роботи потрібно створити нову зміну.
     *
     * Опціонально Z-Звіт може бути сформований на стороні клієнта та переданий в тілі цього запиту
     *
     * <b>Увага!</b> При формуванні звіту на стороні клієнту перевірка коректності
     * розрахунку оборотів та сум продажу не виконується!
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ShiftWithCashierAndCashRegister|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CloseShiftApiV1ShiftsClosePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function closeShiftApiV1ShiftsClosePost(Model\CloseShiftPayload $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CloseShiftApiV1ShiftsClosePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Отримання списку чеків в рамках поточної зміни або за параметрами фільтрів.
     *
     * Пошук за порядковим та фіскальним номерами одночасно неможливий.
     *
     * Якщо у касира немає активної зміни виконується пошук за організацією,
     * у іншому випадку пошук виконується за кассою.
     *
     * @param array $queryParameters {
     *
     * @var string $fiscal_code Фіскальний номер
     * @var int    $serial Порядковий номер
     * @var bool   $desc Зворотній порядок сортування
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptsApiV1ReceiptsGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptsApiV1ReceiptsGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptsApiV1ReceiptsGet($queryParameters, $headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptsSearchApiV1ReceiptsSearchGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptsSearchApiV1ReceiptsSearchGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptsSearchApiV1ReceiptsSearchGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримання інформації про чек.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptApiV1ReceiptsReceiptIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptApiV1ReceiptsReceiptIdGet(string $receiptId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptApiV1ReceiptsReceiptIdGet($receiptId, $headerParameters), $fetch);
    }

    /**
     * Створення чеку продажу/повернення, його фіскалізація та доставка клієнту по email.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateReceiptApiV1ReceiptsSellPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createReceiptApiV1ReceiptsSellPost(Model\ReceiptSellPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateReceiptApiV1ReceiptsSellPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Додавання чеку, створеного в зовнішній системі в офлайн режимі, в базу ТП для подальшої відправки в ДПС.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateOfflineReceiptApiV1ReceiptsSellOfflinePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createOfflineReceiptApiV1ReceiptsSellOfflinePost(Model\OfflineReceiptSellPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateOfflineReceiptApiV1ReceiptsSellOfflinePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Додавання чеку, створеного в зовнішній системі в офлайн режимі, на основі повної інформації про чек.
     * Зовнішня система бере на себе всі розрахунки (знижки, сума, податки...). Транзакційний процесінг зберігає та
     * відправляє чек до ДПС без аналізу та обробки.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\AddExternalReceiptApiV1ReceiptsAddExternalPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function addExternalReceiptApiV1ReceiptsAddExternalPost(Model\CalculatedReceiptSellPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\AddExternalReceiptApiV1ReceiptsAddExternalPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Створення сервісного чеку внесення або винесення коштів.
     *
     * Для чеку сума винесення повинна бути вказана зі знаком мінус, а для внесення зі знаком плюс.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateServiceReceiptApiV1ReceiptsServicePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createServiceReceiptApiV1ReceiptsServicePost(Model\ReceiptServicePayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateServiceReceiptApiV1ReceiptsServicePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Створення сервісного чеку внесення або винесення коштів.
     *
     * Призначено тільки для кас обміну валют.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateServiceCurrencyReceiptApiV1ReceiptsServiceCurrencyPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createServiceCurrencyReceiptApiV1ReceiptsServiceCurrencyPost(Model\ServiceCurrencyPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateServiceCurrencyReceiptApiV1ReceiptsServiceCurrencyPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Створення чеку обміну валют, доступно тільки для ПРРО відповідного типу.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ExchangeApiV1ReceiptsCurrencyExchangePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function exchangeApiV1ReceiptsCurrencyExchangePost(Model\CurrencyExchangePayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ExchangeApiV1ReceiptsCurrencyExchangePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Створення чека видачі готівки утримувачеві ЕПЗ.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-Device-ID ID RRO Agent або мобільного пристрою каси (Для блокування дублікатів)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReceiptModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CashWithdrawalApiV1ReceiptsCashWithdrawalPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function cashWithdrawalApiV1ReceiptsCashWithdrawalPost(Model\CashWithdrawalReceiptPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CashWithdrawalApiV1ReceiptsCashWithdrawalPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Отримання HTML представлення чеку згідно <a href="https://zakon.rada.gov.ua/laws/show/z0832-21#Text">наказу №329 від 08.06.2021</a>.
     *
     * @param array $queryParameters {
     *
     * @var bool $simple
     * @var bool $show_buttons
     *           }
     *
     * @param array $headerParameters {
     *
     * @var bool   $X-Show-Buttons
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array  $accept Accept content header text/html|application/json
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptHtmlApiV1ReceiptsReceiptIdHtmlGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptHtmlApiV1ReceiptsReceiptIdHtmlGet(string $receiptId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptHtmlApiV1ReceiptsReceiptIdHtmlGet($receiptId, $queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Отримання PDF представлення чеку згідно <a href="https://zakon.rada.gov.ua/laws/show/z0832-21#Text">наказу №329 від 08.06.2021</a>.
     *
     * @param array $queryParameters {
     *
     * @var bool $download
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptPdfApiV1ReceiptsReceiptIdPdfGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptPdfApiV1ReceiptsReceiptIdPdfGet(string $receiptId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptPdfApiV1ReceiptsReceiptIdPdfGet($receiptId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримання текстового представлення чека для термопринтеру згідно <a href="https://zakon.rada.gov.ua/laws/show/z0832-21#Text">наказу №329 від 08.06.2021</a>.
     *
     * @param array $queryParameters {
     *
     * @var int $width Print area width in characters
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array  $accept Accept content header text/plain|application/json
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptTextApiV1ReceiptsReceiptIdTextGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptTextApiV1ReceiptsReceiptIdTextGet(string $receiptId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptTextApiV1ReceiptsReceiptIdTextGet($receiptId, $queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Отримання графічного представлення чека для термопринтеру згідно <a href="https://zakon.rada.gov.ua/laws/show/z0832-21#Text">наказу №329 від 08.06.2021</a>.
     *
     * @param array $queryParameters {
     *
     * @var int $width Кількість символів у рядку
     * @var int $paper_width Ширина паперу у міліметрах
     * @var int $qrcode_scale Ширина QR-коду у відсотках від загальної ширини паперу
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptPngApiV1ReceiptsReceiptIdPngGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptPngApiV1ReceiptsReceiptIdPngGet(string $receiptId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptPngApiV1ReceiptsReceiptIdPngGet($receiptId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримання зображення QR-коду чеку.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptQrCodeImageApiV1ReceiptsReceiptIdQrcodeGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptQrCodeImageApiV1ReceiptsReceiptIdQrcodeGet(string $receiptId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptQrCodeImageApiV1ReceiptsReceiptIdQrcodeGet($receiptId, $headerParameters), $fetch);
    }

    /**
     * Отримання XML представлення чеку. Доступний за поточний день.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReceiptXmlApiV1ReceiptsReceiptIdXmlGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReceiptXmlApiV1ReceiptsReceiptIdXmlGet(string $receiptId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReceiptXmlApiV1ReceiptsReceiptIdXmlGet($receiptId, $headerParameters), $fetch);
    }

    /**
     * @param array[] $requestBody
     * @param array   $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SendReceiptToEmailApiV1ReceiptsReceiptIdEmailPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function sendReceiptToEmailApiV1ReceiptsReceiptIdEmailPost(string $receiptId, array $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SendReceiptToEmailApiV1ReceiptsReceiptIdEmailPost($receiptId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Надіслати чек у Viber або SMS за номером телефону.
     *
     * Послуга доступна тільки після активації з веб-порталу.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SendReceiptViaSmsApiV1ReceiptsReceiptIdSmsPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function sendReceiptViaSmsApiV1ReceiptsReceiptIdSmsPost(string $receiptId, Model\ReceiptDeliverySmsPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SendReceiptViaSmsApiV1ReceiptsReceiptIdSmsPost($receiptId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $from_date
     * @var string $to_date
     * @var int    $width
     * @var bool   $is_short
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array  $accept Accept content header text/plain|application/json
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetPeriodicalReportApiV1ReportsPeriodicalGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getPeriodicalReportApiV1ReportsPeriodicalGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetPeriodicalReportApiV1ReportsPeriodicalGet($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Отримання звітів (X та Z) за поточну зміні або звіти за обрану дату.
     *
     * @param array $queryParameters {
     *
     * @var string $from_date
     * @var string $to_date
     * @var array  $shift_id
     * @var int    $serial
     * @var bool   $is_z_report
     * @var bool   $desc
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultReportModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportsApiV1ReportsGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportsApiV1ReportsGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportsApiV1ReportsGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Генерація X звіту.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateXReportApiV1ReportsPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createXReportApiV1ReportsPost(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateXReportApiV1ReportsPost($headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultReportModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetSearchReportsApiV1ReportsSearchGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getSearchReportsApiV1ReportsSearchGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetSearchReportsApiV1ReportsSearchGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Додавання звіту з зовнішньої системи.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\AddExternalReportApiV1ReportsAddExternalPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function addExternalReportApiV1ReportsAddExternalPost(Model\ReportPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\AddExternalReportApiV1ReportsAddExternalPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Отримання звіту.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportApiV1ReportsReportIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportApiV1ReportsReportIdGet(string $reportId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportApiV1ReportsReportIdGet($reportId, $headerParameters), $fetch);
    }

    /**
     * Отримання звіту в текстовому вигляді.
     *
     * @param array $queryParameters {
     *
     * @var int $width Print area width in characters
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array  $accept Accept content header text/plain|application/json
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportTextApiV1ReportsReportIdTextGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportTextApiV1ReportsReportIdTextGet(string $reportId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportTextApiV1ReportsReportIdTextGet($reportId, $queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Отримання звіту в текстовому вигляді.
     *
     * @param array $queryParameters {
     *
     * @var int $width Кількість символів у рядку
     * @var int $paper_width Ширина паперу у міліметрах
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportPngApiV1ReportsReportIdPngGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportPngApiV1ReportsReportIdPngGet(string $reportId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportPngApiV1ReportsReportIdPngGet($reportId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PublicReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GoodsReportApiV1ExtendedReportsGoodsPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function goodsReportApiV1ExtendedReportsGoodsPost(Model\ExtendedReportFiltersPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GoodsReportApiV1ExtendedReportsGoodsPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PublicReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateZReportApiV1ExtendedReportsZPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createZReportApiV1ExtendedReportsZPost(Model\ReportWithExtensionPayloadShort $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateZReportApiV1ExtendedReportsZPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateActualRevenueReportApiV1ExtendedReportsActualRevenuePostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createActualRevenueReportApiV1ExtendedReportsActualRevenuePost(Model\ExtendedReportPayloadShort $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateActualRevenueReportApiV1ExtendedReportsActualRevenuePost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateNetTurnoverReportApiV1ExtendedReportsNetTurnoverPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createNetTurnoverReportApiV1ExtendedReportsNetTurnoverPost(Model\ExtendedReportPayloadShort $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateNetTurnoverReportApiV1ExtendedReportsNetTurnoverPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateBookkeeperZReportApiV1ExtendedReportsBookkeeperZReportPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createBookkeeperZReportApiV1ExtendedReportsBookkeeperZReportPost(Model\ExtendedReportPayloadShort $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateBookkeeperZReportApiV1ExtendedReportsBookkeeperZReportPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateDailyCashFlowReportApiV1ExtendedReportsDailyCashFlowPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createDailyCashFlowReportApiV1ExtendedReportsDailyCashFlowPost(Model\DailyCashFlowPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateDailyCashFlowReportApiV1ExtendedReportsDailyCashFlowPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CreateReceiptReportApiV1ExtendedReportsReceiptPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function createReceiptReportApiV1ExtendedReportsReceiptPost(Model\ExtendedReceiptReportFiltersPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CreateReceiptReportApiV1ExtendedReportsReceiptPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PublicReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportTaskByIdApiV1ExtendedReportsReportTaskIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportTaskByIdApiV1ExtendedReportsReportTaskIdGet(string $reportTaskId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportTaskByIdApiV1ExtendedReportsReportTaskIdGet($reportTaskId, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PublicReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportXlsxByIdApiV1ExtendedReportsReportTaskIdReportXlsxGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportXlsxByIdApiV1ExtendedReportsReportTaskIdReportXlsxGet(string $reportTaskId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportXlsxByIdApiV1ExtendedReportsReportTaskIdReportXlsxGet($reportTaskId, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PublicReportTaskSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetReportJsonByIdApiV1ExtendedReportsReportTaskIdReportJsonGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getReportJsonByIdApiV1ExtendedReportsReportTaskIdReportJsonGet(string $reportTaskId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetReportJsonByIdApiV1ExtendedReportsReportTaskIdReportJsonGet($reportTaskId, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var array $status
     * @var array $type
     * @var bool  $desc
     * @var int   $limit
     * @var int   $offset
     *            }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultShortTransaction|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetTransactionsApiV1TransactionsGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getTransactionsApiV1TransactionsGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetTransactionsApiV1TransactionsGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\TransactionModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetTransactionApiV1TransactionsTransactionIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getTransactionApiV1TransactionsTransactionIdGet(string $transactionId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetTransactionApiV1TransactionsTransactionIdGet($transactionId, $headerParameters), $fetch);
    }

    /**
     * Даний метод підписання даних більше не підтримується,.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\TransactionModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UpdateTransactionApiV1TransactionsTransactionIdPatchUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function updateTransactionApiV1TransactionsTransactionIdPatch(string $transactionId, Model\UpdateTransactionPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\UpdateTransactionApiV1TransactionsTransactionIdPatch($transactionId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Отримання налаштувань податків.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\ExtendedTaxModel[]|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetAllTaxesApiV1TaxGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getAllTaxesApiV1TaxGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetAllTaxesApiV1TaxGet($headerParameters), $fetch);
    }

    /**
     * Перегляд номенклатури товарів.
     *
     * @param array $queryParameters {
     *
     * @var string $name Пошук за назвою (Буде видалено, використовуйте параметр query)
     * @var string $barcode Пошук за штрихкодом (Буде видалено, використовуйте параметр query)
     * @var string $query Пошук товарів
     * @var string $order_by_name Сортування по назві
     * @var string $order_by_code Сортування по коду
     * @var string $order_by_position Сортування по позиції
     * @var bool   $load_children Завантажити пов'язані товарі
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultGoodModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetGoodsApiV1GoodsGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getGoodsApiV1GoodsGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetGoodsApiV1GoodsGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Перегляд товару із номенклатури.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\SrsoSchemaGoodSchemaGoodModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetGoodApiV1GoodsGoodIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getGoodApiV1GoodsGoodIdGet(string $goodId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetGoodApiV1GoodsGoodIdGet($goodId, $headerParameters), $fetch);
    }

    /**
     * Експорт товарів організації в excel, csv або json.
     *
     * @param string $exportExtension  Тип файлу експорту: csv, excel або json
     * @param array  $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OperationBaseResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ExportGoodsApiV1GoodsExportExportExtensionGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function exportGoodsApiV1GoodsExportExportExtensionGet(string $exportExtension, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ExportGoodsApiV1GoodsExportExportExtensionGet($exportExtension, $headerParameters), $fetch);
    }

    /**
     * Отримати статус задачі по експорту товарів.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CheckStatusResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ExportGoodsTaskStatusApiV1GoodsExportTaskStatusTaskIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function exportGoodsTaskStatusApiV1GoodsExportTaskStatusTaskIdGet(string $taskId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ExportGoodsTaskStatusApiV1GoodsExportTaskStatusTaskIdGet($taskId, $headerParameters), $fetch);
    }

    /**
     * Отримати файл експорту товарів.
     *
     * @param array $queryParameters {
     *
     * @var int $chunk_number Номер частини експорту товарів (експорт у json)
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ExportGoodsFileApiV1GoodsExportFileTaskIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function exportGoodsFileApiV1GoodsExportFileTaskIdGet(string $taskId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ExportGoodsFileApiV1GoodsExportFileTaskIdGet($taskId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Імпорт товарів з csv, xlsx або json.
     *
     * @param array $queryParameters {
     *
     * @var bool $ignore_barcode_duplicates
     * @var bool $auto_supply
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OperationBaseResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ImportGoodsFromFileApiV1GoodsImportUploadPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function importGoodsFromFileApiV1GoodsImportUploadPost(Model\BodyImportGoodsFromFileApiV1GoodsImportUploadPost $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ImportGoodsFromFileApiV1GoodsImportUploadPost($requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Отримати статус задачі по імпорту товарів.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CheckStatusResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ImportGoodsTaskStatusApiV1GoodsImportTaskStatusTaskIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function importGoodsTaskStatusApiV1GoodsImportTaskStatusTaskIdGet(string $taskId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ImportGoodsTaskStatusApiV1GoodsImportTaskStatusTaskIdGet($taskId, $headerParameters), $fetch);
    }

    /**
     * Застосувати опрацьовані зміни товарів.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OperationBaseResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\ImportGoodsApplyChangesApiV1GoodsImportApplyChangesTaskIdPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function importGoodsApplyChangesApiV1GoodsImportApplyChangesTaskIdPost(string $taskId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\ImportGoodsApplyChangesApiV1GoodsImportApplyChangesTaskIdPost($taskId, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\RunOrdersSynchronizationApiV1OrdersSyncPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function runOrdersSynchronizationApiV1OrdersSyncPost(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\RunOrdersSynchronizationApiV1OrdersSyncPost($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool   $desc
     * @var bool   $delivery_desc
     * @var bool   $orders_all
     * @var array  $status
     * @var string $stock_code
     * @var int    $limit
     * @var int    $offset
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\PaginatedResultOrderModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetOrdersApiV1OrdersGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getOrdersApiV1OrdersGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetOrdersApiV1OrdersGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Використовуйте цей метод щоб додати замовлення, повертає список **тільки доданих** замовлень, замовлення що вже зареєстровані в системі будуть проігноровані.
     *
     * `order_id` - Ім'я замовлення, яке відображається в додатку
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\AddOrdersApiV1OrdersPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function addOrdersApiV1OrdersPost($requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\AddOrdersApiV1OrdersPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Метод для видалення інтеграції.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\DeleteIntegrationSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\DeleteIntegrationApiV1OrdersIntegrationDeleteUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function deleteIntegrationApiV1OrdersIntegrationDelete(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\DeleteIntegrationApiV1OrdersIntegrationDelete($headerParameters), $fetch);
    }

    /**
     * Метод для отримання інформації про інтеграцію.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\IntegrationInfoSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetIntegrationApiV1OrdersIntegrationGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getIntegrationApiV1OrdersIntegrationGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetIntegrationApiV1OrdersIntegrationGet($headerParameters), $fetch);
    }

    /**
     * Даним методом встановлюється URL адреса куди при редагуванні замовлення буде надіслано POST запити з відповідною інформацією.
     *
     * Налаштування зберігаються для кожного касира окремо.
     *
     * Указана в даному запиті адреса повинна приймати POST запити із указаною в документації схемою
     * та повертати статус-код 200, у разі якщо статус-код буде >= 400 або час очікування відповіді
     * більше 5 секунд у відповідь буде надіслана помилка.
     *
     * Під час встановлення налаштувань сервером CheckBox генерується секретний ключ та повертається у
     * відповіді на даний метод, за допомогою цього ключа можна перевірити чи дійсно запит
     * виконується серверами CheckBox.
     *
     * Під час виконання виклику вебхуків тіло запиту хешується за допомогою алгоритму:
     * ```
     * encodeBase64(
     * HmacSHA256(
     * getBytesUTF-8(
     * request_body
     * )
     * secret_key
     * )
     * )
     * ```
     * - `encodeBase64` - функція перетворення бінарних даних в Base64 формат [wiki](https://ru.wikipedia.org/wiki/Base64),
     * - `HmacSHA256` - функция створення хешу підпису даних [wiki](https://ru.wikipedia.org/wiki/HMAC),
     * - `getBytesUTF-8` - функция перетворення рядка в бінарне представлення (в кодуванні UTF-8) [wiki](https://ru.wikipedia.org/wiki/UTF-8),
     * - `request_body` - тіло запиту
     *
     * з використання ключа та записується до заголовку `x-request-signature`,
     * таким чином на стороні де отримується запит можна перевірити дійсність даних за тим же алгоритмом.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\IntegrationInfoResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SetIntegrationApiV1OrdersIntegrationPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function setIntegrationApiV1OrdersIntegrationPost(Model\SetIntegrationPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SetIntegrationApiV1OrdersIntegrationPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $orders_all
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OrderModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetOrderApiV1OrdersOrderIdGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getOrderApiV1OrdersOrderIdGet(string $orderId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetOrderApiV1OrdersOrderIdGet($orderId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Використовуйте цей метод, щоб перевести статус замовлення з **PENDING** в **CANCELLED**.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OrderModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CancelOrderApiV1OrdersOrderIdPatchUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function cancelOrderApiV1OrdersOrderIdPatch(string $orderId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CancelOrderApiV1OrdersOrderIdPatch($orderId, $headerParameters), $fetch);
    }

    /**
     * Використовуйте цей мотед, щоб перевести статус замовлення з **PENDING** в **SUCCESS**.
     *
     * Метод працює тільки з замовленнями які не потрібно фіскалізувати.
     * У відповідь буде відправлено замовлення на адресу, встановлену для отримання зворотнього виклику (вебхук).
     *
     * @param array $queryParameters {
     *
     * @var string $order_id
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OrderModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\CloseNotFiscalizeOrderApiV1OrdersClosePatchUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function closeNotFiscalizeOrderApiV1OrdersClosePatch(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\CloseNotFiscalizeOrderApiV1OrdersClosePatch($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Метод для редагування замовлення на стороні інтеграції.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\IntegrationEditOrderReceiptSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\EditOrderApiV1OrdersIntegrationEditOrderPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function editOrderApiV1OrdersIntegrationEditOrderPost(Model\IntegrationEditOrderReceiptSchema $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\EditOrderApiV1OrdersIntegrationEditOrderPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $new_status Новий статус замовлення
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\OrderModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UpdateCustomOrderStatusApiV1OrdersCustomStatusOrderIdPatchUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function updateCustomOrderStatusApiV1OrdersCustomStatusOrderIdPatch(string $orderId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\UpdateCustomOrderStatusApiV1OrdersCustomStatusOrderIdPatch($orderId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Даним методом можна отримати курси валют встановлені для поточної зміни.
     *
     * @param array $queryParameters {
     *
     * @var bool $active
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CurrencyRateModel[]|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCurrencyRatesApiV1CurrencyRateGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCurrencyRatesApiV1CurrencyRateGet(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCurrencyRatesApiV1CurrencyRateGet($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Оновлення налаштувань курсів валют для поточної зміни.
     *
     * Підтримується встановлення/оновлення декількох курсів одночасно
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CurrencyRateModel[]|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SetupCurrencyRatesApiV1CurrencyRateSetupPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function setupCurrencyRatesApiV1CurrencyRateSetupPost(Model\SetupRatesPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SetupCurrencyRatesApiV1CurrencyRateSetupPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Отримання встановленого курсу валюти.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\CurrencyRateModel|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetCurrencyRateApiV1CurrencyRateCurrencyCodeGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getCurrencyRateApiV1CurrencyRateCurrencyCodeGet(string $currencyCode, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetCurrencyRateApiV1CurrencyRateCurrencyCodeGet($currencyCode, $headerParameters), $fetch);
    }

    /**
     * Метод видаляє налаштування вебхуків.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\DeleteWebhookSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\DeleteWebhookApiV1WebhookDeleteUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function deleteWebhookApiV1WebhookDelete(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\DeleteWebhookApiV1WebhookDelete($headerParameters), $fetch);
    }

    /**
     * Даним методом можна перевірити стан налаштувань вебхуків.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Client-Name Назва клієнту або сервісу що інтегрується з API, наприклад 'My Custom SDK'
     * @var string $X-Client-Version Номер версії клієнту що інтегрується з API, наприклад 'v1.2.5'
     * @var string $X-Access-Key Ключ доступу інтеграції (тільки для авторизованих API інтеграцій)
     * @var string $X-License-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\WebhookInfoSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\GetWebhookInfoApiV1WebhookGetUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function getWebhookInfoApiV1WebhookGet(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\GetWebhookInfoApiV1WebhookGet($headerParameters), $fetch);
    }

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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Vendor\Library\Generated\CheckboxUA\Model\WebhookInfoResponseSchema|\Psr\Http\Message\ResponseInterface
     *
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\SetWebhookApiV1WebhookPostUnprocessableEntityException
     * @throws \Vendor\Library\Generated\CheckboxUA\Exception\UnexpectedStatusCodeException
     */
    public function setWebhookApiV1WebhookPost(Model\SetWebhookPayload $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\CheckboxUA\Endpoint\SetWebhookApiV1WebhookPost($requestBody, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Vendor\Library\Generated\CheckboxUA\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
