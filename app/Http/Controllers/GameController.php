<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return $this->buildscuccess(Response::HTTP_OK,  $games, 'Games records',  'success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = Game::create($request->all());
        return $this->buildscuccess(Response::HTTP_OK,  $game, 'Record inserted',  'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return $this->buildscuccess(Response::HTTP_OK,  $game, 'Record',  'success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return $this->buildscuccess(Response::HTTP_OK,  $game, 'Record Updated',  'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return $this->buildscuccess(Response::HTTP_OK,  $game, 'Record deleted',  'success');
    }

    public function buildscuccess($statusCode, $data, $message, $response) {
        return response()->json(['status_code' => $statusCode, 'data' => $data, 'message' => $message, 'response' => $response]);
    }
}
