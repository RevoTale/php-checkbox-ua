<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
