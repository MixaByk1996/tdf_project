<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use App\Models\Categories;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AngleAPIController extends Controller
{
    public function index()
    {
        $angles = Angle::query()->paginate(75);
        return view('admin.angle.index', ['angles' => $angles]);
    }


    public function create(){
        return view('admin.angle.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Angle::query()->create($request->all());
        return redirect()->route('angle.index')->with('status', 'Угол успешно добавлен');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Angle::find($id);
        $category->delete();
        return redirect()->route('angle.index')->with('success','Угол успешно удален');
    }
}
