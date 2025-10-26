<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\CategoryGame;
use DB;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class CategoryGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_games = DB::table('category_games')
            ->join('categories', 'category_games.category_id', '=', 'categories.id')
            ->select(
                'categories.id',
                'categories.category_name',
                'categories.photo',
                DB::raw('COUNT(category_games.id) as count')
            )
            ->groupBy('categories.id', 'categories.category_name', 'categories.photo')
            ->orderByDesc('count')
            ->take(8)
            ->get();
        return CategoryResource::collection($category_games);
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
    public function show(CategoryGame $categoryGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryGame $categoryGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryGame $categoryGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryGame $categoryGame)
    {
        //
    }
}
