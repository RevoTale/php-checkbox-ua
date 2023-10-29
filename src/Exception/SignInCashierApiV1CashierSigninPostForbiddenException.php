<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Exception;

class SignInCashierApiV1CashierSigninPostForbiddenException extends ForbiddenException
{
    /**
     * @var \RevoTale\CheckboxUA\Model\HTTPError
     */
    private $hTTPError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\RevoTale\CheckboxUA\Model\HTTPError $hTTPError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Invalid credentials');
        $this->hTTPError = $hTTPError;
        $this->response = $response;
    }

    public function getHTTPError(): \RevoTale\CheckboxUA\Model\HTTPError
    {
        return $this->hTTPError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
