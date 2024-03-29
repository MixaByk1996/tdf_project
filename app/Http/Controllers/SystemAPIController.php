<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SystemAPIController extends Controller
{
    public function index()
    {
        $systems = System::query()->paginate(75);
        return view('admin.system', ['systems' => $systems]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        System::query()->create($request->all());
        return redirect('admin-system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $category = System::find($id);
        if(!empty($category)){
            return response()->json($category);
        }
        else{
            return response()->json([
                'message' => 'Система не найдена'
            ]);
        }
    }

    public function create(){
        return view('admin.add-system');
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
        $category = System::find($id);
        $category->name = $request->get('name');
        $category->save();
        return response()->json([
            'message' => 'Система обновлена'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|JsonResponse
     */
    public function destroy($id)
    {
        $category = System::find($id);
        $category->delete();
        $systems = System::query()->paginate(5);
        return redirect('admin-system');
    }
}
