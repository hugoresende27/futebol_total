<?php

namespace App\Http\Controllers;

use App\Http\ApiClasses\ApiFootballClient;
use Illuminate\Http\Request;



class FootballController extends Controller
{

    public function findTeam(Request $request)
    {
        $teamToSearch = $request->search;
        $client = new ApiFootballClient();
        $teamResult = $client->searchTeam($teamToSearch ?? 'benfica');
        $results =  $teamResult->response;
        return view('search.teams', compact('results'));
    }


    public function findPlayer(Request $request)
    {
        $teamToSearch = $request->search;
//        $client = new ApiFootballClient();
//        $teamResult = $client->searchTeam($teamToSearch);
//        $results =  $teamResult->response;
        return view('search.players');
    }
}
