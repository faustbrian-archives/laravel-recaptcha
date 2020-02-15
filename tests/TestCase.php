<?php

declare(strict_types=1);

/*
 * This file is part of Recaptcha.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Recaptcha\Tests;

use KodeKeep\Recaptcha\Facades\RecaptchaFacade;
use KodeKeep\Recaptcha\Providers\RecaptchaServiceProvider;
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
