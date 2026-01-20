<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

final readonly class ClientNamePlugin implements Plugin
{
    public function __construct(
        private string $clientName,
        private string $clientVersion = '',
    ) {
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $request = $request->withHeader('X-Client-Name', $this->clientName);

        if ('' !== $this->clientVersion) {
            $request = $request->withHeader('X-Client-Version', $this->clientVersion);
        }

        return $next($request);
    }
}
