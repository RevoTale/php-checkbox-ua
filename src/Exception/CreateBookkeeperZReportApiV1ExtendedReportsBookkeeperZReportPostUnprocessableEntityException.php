<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Exception;

class CreateBookkeeperZReportApiV1ExtendedReportsBookkeeperZReportPostUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \RevoTale\CheckboxUA\Model\HTTPValidationError
     */
    private $hTTPValidationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\RevoTale\CheckboxUA\Model\HTTPValidationError $hTTPValidationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation Error');
        $this->hTTPValidationError = $hTTPValidationError;
        $this->response = $response;
    }

    public function getHTTPValidationError(): \RevoTale\CheckboxUA\Model\HTTPValidationError
    {
        return $this->hTTPValidationError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
