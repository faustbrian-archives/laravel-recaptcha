<?php

declare(strict_types=1);

/*
 * This file is part of Recaptcha.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Recaptcha\Tests;

use Konceiver\Recaptcha\Facades\RecaptchaFacade;
use Konceiver\Recaptcha\Providers\RecaptchaServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [RecaptchaServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['Recaptcha' => RecaptchaFacade::class];
    }
}
