<?php

namespace App\Http\Controllers;

use App\Http\ApiClasses\ApiFootballClient;
use Illuminate\Http\Request;


class FootballController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function findTeam(Request $request) : array
    {
        $teamToSearch = $request->search;
        $client = new ApiFootballClient();
        $teamResult = $client->searchTeam($teamToSearch);
        return $teamResult->response;
    }
}
