<?php

namespace RevoTale\CheckboxUA;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

final readonly class BearerAuthentication implements AuthenticationPlugin
{
    public function __construct(private string $oAuth)
    {
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', "Bearer $this->oAuth");
    }

    public function getScope(): string
    {
        return 'Cashier JWT token';
    }
}
