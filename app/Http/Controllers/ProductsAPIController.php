<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\System;
use Illuminate\Http\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsAPIController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Products::with(['system', 'angle', 'producer'])->get());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
//    {
//        $validatedData = $request->validate([
//            'image_data' => 'required|file|mimes:jpeg,jpg,png,gif',
//        ]);
//
//        Storage::disk('public')->putFileAs('/img/uploads/products', new File($validatedData['image_data']), pathinfo($validatedData['image_data']->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $validatedData['image_data']->getClientOriginalExtension());
//        $image_name = pathinfo($validatedData['image_data']->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $validatedData['image_data']->getClientOriginalExtension();
        $product = new Products();
        $product->image_path =  '';//Storage::url('img/uploads/products/' . $image_name );
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->serial_id = $request->get('serial_id');
        $product->description = $request->get('description');
        $product->article = $request->get('article');
        $product->system_id = $request->get('system_id');
        $product->producer_id = $request->get('producer_id');
        $product->category_id = $request->get('category_id');
        $product->angle_id = $request->get('angle_id');
        $product->save();
        // Products::query()->create($request->all());
        return response()->json([
            'message' => 'Продукт добавлен'
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
        $category = Products::find($id);
        if(!empty($category)){
            return response()->json($category);
        }
        else{
            return response()->json([
                'message' => 'Продукт не найден'
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
        $category = Products::find($id);
        $category->name = $request->get('name');
        $category->save();
        return response()->json([
            'message' => 'Продукт обновлена'
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
        $category = Products::find($id);
        $category->delete();
        return response()->json([
            'message' => 'Продукт удалена'
        ]);
    }
}
