<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Producer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProducerAPIController extends Controller
{
    public function index()
    {
        $producers = Producer::query()->paginate(5);
        return view('admin.producer.index', ['producers' => $producers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|JsonResponse
     */
    public function create(){
        return view('admin.producer.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Producer::query()->create($request->all());
        return redirect()->route('producer.index')->with('status', 'Производитель успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $category = Producer::find($id);
        if(!empty($category)){
            return response()->json($category);
        }
        else{
            return response()->json([
                'message' => 'Производитель не найдена'
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
        $category = Producer::find($id);
        $category->name = $request->get('name');
        $category->save();
        return response()->json([
            'message' => 'Производитель обновлена'
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
        $category = Producer::find($id);
        $category->delete();
        return redirect()->route('producer.index')->with('success','Производитель успешно удален');
    }
}
