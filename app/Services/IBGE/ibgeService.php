<?php


namespace App\Services\IBGE;

use GuzzleHttp\Client;

class IbgeService{

    public function __construct(){
        $this->client = new Client([


        ]);

    }
}