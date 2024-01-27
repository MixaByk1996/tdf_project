<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AngleAPIController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Angle::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        Angle::query()->create($request->all());
        return response()->json([
            'message' => 'Категория добавлена'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $category = Angle::find($id);
        if(!empty($category)){
            return response()->json($category);
        }
        else{
            return response()->json([
                'message' => 'Параметр не найдена'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $category = Angle::find($id);
        $category->name = $request->get('name');
        $category->save();
        return response()->json([
            'message' => 'Параметр обновлен'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        $category = Angle::find($id);
        $category->delete();
        return response()->json([
            'message' => 'Параметр удален'
        ]);
    }
}
