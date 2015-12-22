<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],
    'mandrill' => [
        'secret' => '',
    ],
    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],
    'stripe' => [
        'model' => 'User',
        'secret' => '',
    ],
    'sms' => [
        'login' => 'tatu',
        'apikey' => '1271a2420038d3f7451fe0db73a1db77f8c4e37d',
        'sender' => 'Octavian',
        'userAgent' => 'Octavian',
    ],


    'update' => [
        'settings' => [
            'user' => 'theorchid',
            'repo' => 'settings',
        ],
        'socket'   => [
            'user' => 'theorchid',
            'repo' => 'socket',
        ],
    ],







];
