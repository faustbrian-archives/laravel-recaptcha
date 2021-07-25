<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Recaptcha\Http\Middleware;

use Closure;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ReCaptcha\ReCaptcha;

class VerifyRecaptcha
{
    private ReCaptcha $recaptcha;

    private $options = ['expectedHostname', 'expectedAction', 'scoreThreshold', 'challengeTimeout'];

    public function __construct(Repository $config)
    {
        $this->recaptcha = new ReCaptcha($config->get('recaptcha.secret'));

        foreach ($this->options as $option) {
            $value = $config->get("recaptcha.{$option}");

            if (! empty($value)) {
                $methodName = Str::camel("set_{$option}");

                $this->recaptcha->{$methodName}($value);
            }
        }
    }

    public function handle(Request $request, Closure $next)
    {
        if (! $request->has('g-recaptcha-response')) {
            return $this->handleError($request);
        }

        $response = $this->recaptcha->verify($request->get('g-recaptcha-response'), $request->ip());

        if (! $response->isSuccess()) {
            return $this->handleError($request);
        }

        return $next($request);
    }

    private function handleError($request)
    {
        if ($request->wantsJson()) {
            abort(400);
        }

        return back()->withInput();
    }
}
