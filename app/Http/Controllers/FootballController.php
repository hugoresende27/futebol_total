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
        $teamResult = $client->searchTeams($teamToSearch ?? 'benfica');
        $results =  $teamResult->response;
        return view('search.teams', compact('results'));
    }


    public function findPlayer(Request $request)
    {
        $playerToSearch = $request->search;
        $client = new ApiFootballClient();
        $playerToSearch = $client->searchPlayers($playerToSearch);
        $results =  $playerToSearch->response;
        return view('search.players', compact('results'));
    }
}
