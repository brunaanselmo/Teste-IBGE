<?php


namespace App\Services\IBGE;

use GuzzleHttp\Client;

class IbgeService{

    private Client $client;

    public function __construct(){
        $this->client = new Client([
            'base_uri' => 'https://servicodados.ibge.gov.br/api/v1/',
            'timeout' => 5.0,
            'verify' => false

        ]);

    }


    public function getCitiesByStateSigla(string $sigla){
       
        $uri = sprintf('localidades/estados/%s/municipios', $sigla);
        $response = $this->client->get($uri);

        return json_decode($response->getBody());
    }
}