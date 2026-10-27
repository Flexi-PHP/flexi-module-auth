<?php

declare(strict_types=1);

namespace Flexi\Modules\Auth\Infrastructure\Adapters;

use Flexi\Contracts\Interfaces\SecretProviderInterface;
use Flexi\Contracts\Interfaces\ConfigurationInterface;

class ConfigurationSecretProvider implements SecretProviderInterface
{
    private ConfigurationInterface $configuration;

    public function __construct(ConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getSecret(): string
    {
        return $this->configuration->get('webhook_secret');
    }
}
