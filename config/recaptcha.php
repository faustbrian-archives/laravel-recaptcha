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

return [

    /*
    |--------------------------------------------------------------------------
    | Default Secret (v2 and v3)
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'secret' => env('RECAPTCHA_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Default Expected Host Name (v2 and v3)
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'expectedHostname' => env('RECAPTCHA_EXPECTED_HOSTNAME'),

    /*
    |--------------------------------------------------------------------------
    | Default Expected Action (v3 only)
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'expectedAction' => env('RECAPTCHA_EXPECTED_ACTION'),

    /*
    |--------------------------------------------------------------------------
    | Default Score Threshold (v3 only)
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'scoreThreshold' => env('RECAPTCHA_SCORE_THRESHOLD'),

    /*
    |--------------------------------------------------------------------------
    | Default Score Threshold (v2 and v3)
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'challengeTimeout' => env('RECAPTCHA_CHALLENGE_TIMEOUT'),

];
