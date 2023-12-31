<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA;

use GuzzleHttp\Psr7\Uri;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

final readonly class ClientFactory
{
    public static function createClient(string $token = null): Client
    {
        $plugins = [];
        if (null !== $token) {
            $plugins[] = new AuthenticationRegistry([new BearerAuthentication($token)]);
        }
        $plugins[] = new AddHostPlugin(new Uri('https://api.checkbox.in.ua'), ['replace' => true]);
        $pluginClient = new PluginClient(Psr18ClientDiscovery::find(), $plugins);

        return Client::create($pluginClient);
    }
}
