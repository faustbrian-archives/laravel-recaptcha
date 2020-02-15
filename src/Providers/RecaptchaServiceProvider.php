<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Recaptcha\Providers;

use Illuminate\Support\ServiceProvider;

class RecaptchaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/recaptcha.php', 'recaptcha');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/recaptcha.php' => $this->app->configPath('recaptcha.php'),
            ], 'config');
        }
    }
}
