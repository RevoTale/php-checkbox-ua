<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA;

use GuzzleHttp\Psr7\Uri;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpAsyncClient;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;

final readonly class ClientFactory
{
    public static function createClient(?string                          $token = null,
                                       null| HttpAsyncClient|ClientInterface $client = null): Client
    {
        $plugins = [];
        if (null !== $token) {
            $plugins[] = new AuthenticationRegistry([new BearerAuthentication($token)]);
        }
        $plugins[] = new AddHostPlugin(new Uri('https://api.checkbox.in.ua'), ['replace' => true]);
        $pluginClient = new PluginClient($client??Psr18ClientDiscovery::find(), $plugins);

        return Client::create($pluginClient);
    }
}
