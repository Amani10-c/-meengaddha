<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Game;
use App\Models\Group;
use GuzzleHttp\Psr7\Message;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {

        $group = Group::create([
            'name_game' => $request->name_game,
            'team_1' => $request->team_1,
            'team_2' => $request->team_2,
            'Number_of_questions' => $request->Number_of_questions,
        ]);

        $game = Game::create([
            'user_id' => auth()->id(),
            'group_id' => $group->id,
        ]);
        $game->categoryGames()->attach($request->category_id);

        return response()->json([
            'status' => 'success',
            'messages' => 'ok',

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }

}
