<?php

namespace Vendor\Library\Generated\CheckboxUA\Exception;

class SignInCashierViaPinCodeApiV1CashierSigninPinCodePostForbiddenException extends ForbiddenException
{
    /**
     * @var \Vendor\Library\Generated\CheckboxUA\Model\HTTPError
     */
    private $hTTPError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Vendor\Library\Generated\CheckboxUA\Model\HTTPError $hTTPError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Invalid credentials');
        $this->hTTPError = $hTTPError;
        $this->response = $response;
    }

    public function getHTTPError(): \Vendor\Library\Generated\CheckboxUA\Model\HTTPError
    {
        return $this->hTTPError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
