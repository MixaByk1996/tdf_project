<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use App\Models\Series;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SeriesAPIController extends Controller
{
    public function index()
    {
        $series = Series::query()->paginate(75);
        return view('admin.series.index', ['series' => $series]);
    }

    public function create(){
        return view('admin.series.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Series::query()->create($request->all());
        return redirect()->route('series.index')->with('status', 'Серия успешна добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $category = Series::find($id);
        if(!empty($category)){
            return response()->json($category);
        }
        else{
            return response()->json([
                'message' => 'Серия не найдена'
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
        $category = Series::find($id);
        $category->name = $request->get('name');
        $category->save();
        return response()->json([
            'message' => 'Серия обновлена'
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
        $category = Series::find($id);
        $category->delete();
        return redirect()->route('series.index')->with('success','Серия успешна удалена');
    }
}
