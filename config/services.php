<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
        'client_id' => env('AIbFhbau61znbecxxDiAJ1wb3'),
        'client_secret' => env('HioDz1JE5h0ESFdTS5F8yK7xqv0QcadvPoCWDJNHrEUofQT75X'),
        'redirect' => env('http://localhost:8000/auth/twitter/callback'),
    ],

    'facebook' => [
        'client_id' => env('265172104124240'),
        'client_secret' => env('eba65393ee5242553fb0b3036a701a04'),
        'redirect' => env('http://localhost:8000/auth/facebook/callback'),
    ],

    'github' => [
        'client_id' => env('3e9fce35cd97944a51ce'),
        'client_secret' => env('8d85bf121815d8f55936ee079e88e3d956179b67'),
        'redirect' => env('http://localhost:8000/auth/github/callback')
    ],

];
