<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

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
    'github' => [
        'client_id' => 'Your github api', //Github API
        'client_secret' => 'YOUR_GITHUB_SECRET', //Github Secret
        'redirect' => 'http://127.0.0.1:8000/login/github/callback',
     ],
     'google' => [
        'client_id' => '352580574665-g3af5bv9brdmj8gb044c88f92r5gsrim.apps.googleusercontent.com', //Google API
        'client_secret' => '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', //Google Secret
        'redirect' => 'http://127.0.0.1:8000/login/google/callback',
     ],
     'facebook' => [
        'client_id' => '3568111496794157', //Facebook API
        'client_secret' => 'd22d6d7b8cbbb227b32ae1991e65bfd2', //Facebook Secret
        'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
     ],

];
