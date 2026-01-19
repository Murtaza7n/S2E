<?php

return [
    'sms' => [
        'provider' => env('SMS_PROVIDER', 'twilio'),
        'url' => env('SMS_API_URL'),
        'from' => env('SMS_FROM_NUMBER'),
        'twilio' => [
            'account_sid' => env('TWILIO_ACCOUNT_SID'),
            'auth_token' => env('TWILIO_AUTH_TOKEN'),
        ],
    ],

    'whatsapp' => [
        'api_url' => env('WHATSAPP_API_URL'),
        'api_key' => env('WHATSAPP_API_KEY'),
    ],
];

