<?php

namespace Locator;

use GuzzleHttp\Client;

class Locator
{
    private $phoneBook =
    [
        "353" =>
        [
            'rostelecom' =>
            [
                'start' =>2310000,
                'end'=>2369999
            ],
            'megafon' =>
            [
                'start' =>2309000,
                'end'=>2309999
            ]
        ]
    ];

    
}