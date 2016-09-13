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

    'firebase' => [
        'api_key' => 'AIzaSyCZc_TRbdTDqq8xCnASs2FGvc0RM7ShzcE',
        'auth_domain' => 'laravel-writer.firebaseapp.com',
        'database_url' => 'https://laravel-writer.firebaseio.com',
        'secret' => '1dCdi8Plx1woQJwk2GSJQZzH2RCT3kf9B7u33VvL',
        'storage_bucket' => 'laravel-writer.appspot.com',
    ]

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
