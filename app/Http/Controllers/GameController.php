<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\CategoryGame;
use App\Models\Game;
use App\Models\Group;
use DB;
use Illuminate\Http\Request;

class GameController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);

        $category_game = CategoryGame::where('game_id', $game->id)
            ->pluck('category_id');

        $number_questions = $game->group->Number_of_questions;

        $categories = Category::whereIn('id', $category_game)
            ->get(['id', 'category_name', 'photo'])
            ->map(function ($category) use ($number_questions) {
                $category->questions_count = $number_questions;
                return $category;
            });

        return response()->json([
            'categories' => $categories,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
