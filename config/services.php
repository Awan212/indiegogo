<?php

return [
    'facebook' => [
        'client_id' => '1247323179025347',
        'client_secret' => '591d11bcdedf7f9e8759b44c3be54377',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'linkedin' => [
        'client_id' => '770hx55jdxfwxm',
        'client_secret' => 'XCs1vrKfA6uOXHLH',
        'redirect' => 'http://localhost:8000/callback/linkedin',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
