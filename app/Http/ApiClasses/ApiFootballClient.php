<?php

namespace App\Http\ApiClasses;

use GuzzleHttp\Exception\GuzzleException;

class ApiFootballClient
{

    private string $apiKey;
    private string $domain;
    private string $host;
    private \GuzzleHttp\Client $client;


    public function __construct()
    {
        $this->client =  new \GuzzleHttp\Client();
        $this->apiKey = env('FOOTBALL_API_KEY');
        $this->domain = env('FOOTBALL_API_DOMAIN');
        $this->host = env('FOOTBALL_API_HOST');
    }

    /**
     * @param string $teamName
     * @return mixed
     * @throws GuzzleException
     */
    public function searchTeams(string $teamName) : object
    {


        $response = $this->client->request('GET', $this->domain.'teams?search='.$teamName, [
            'headers' => [
                'X-RapidAPI-Host' => $this->host ,
                'X-RapidAPI-Key' => $this->apiKey ,
            ],
        ]);

        return json_decode( $response->getBody()->getContents());

    }

    public function searchPlayers(string $playerName) : object
    {


        $response = $this->client->request('GET', $this->domain.'players?search='.$playerName.'&league=94', [
            'headers' => [
                'X-RapidAPI-Host' => $this->host ,
                'X-RapidAPI-Key' => $this->apiKey ,
            ],
        ]);


        return json_decode( $response->getBody()->getContents());

    }
}
