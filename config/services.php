<?php

return [

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
    'google' => [
        'client_id' => '202614746161-mhscstokaoseadqftqq91dkh2gtv9hrg.apps.googleusercontent.com',
        'client_secret' => '2seuKEGWqb_-1NeLFskBaJKP',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '278266167568134 ',
        'client_secret' => 'f1dad0efb1ccf0f182c17c6f14f51c99',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],
    'github' => [
        'client_id' => 'aeb232331764d557d742',
        'client_secret' => '128c792c305178977e5b16c3469a9063b26a1938',
        'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],
];
