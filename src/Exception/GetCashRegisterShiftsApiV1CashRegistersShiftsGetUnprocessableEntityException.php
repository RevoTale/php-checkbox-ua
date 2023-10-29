<?php

declare(strict_types=1);

namespace Vendor\Library\Generated\CheckboxUA\Exception;

class GetCashRegisterShiftsApiV1CashRegistersShiftsGetUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Vendor\Library\Generated\CheckboxUA\Model\HTTPValidationError
     */
    private $hTTPValidationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Vendor\Library\Generated\CheckboxUA\Model\HTTPValidationError $hTTPValidationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation Error');
        $this->hTTPValidationError = $hTTPValidationError;
        $this->response = $response;
    }

    public function getHTTPValidationError(): \Vendor\Library\Generated\CheckboxUA\Model\HTTPValidationError
    {
        return $this->hTTPValidationError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
