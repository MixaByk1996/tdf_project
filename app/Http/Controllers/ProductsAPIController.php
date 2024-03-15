<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use App\Models\Categories;
use App\Models\Producer;
use App\Models\Products;
use App\Models\Series;
use App\Models\System;
use Illuminate\Http\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsAPIController extends Controller
{
    public function index(Request $request)
    {
        //return response()->json(Products::with(['system', 'angle', 'producer'])->get());
        $products = Products::query()->with(['system', 'angle', 'producer'])->paginate(75);

        return view('admin.products.index', ['products' => $products]);
    }

    public function productsSearch(Request $request)
    {
        //return response()->json(Products::with(['system', 'angle', 'producer'])->get());
        $products = Products::query()->with(['system', 'angle', 'producer'])->where('article',$request->get('search'))->paginate(75);

        return view('admin.products.index', ['products' => $products]);
    }
    public function create(){
        $series = Series::all();
        $categories = Categories::all();
        $producers = Producer::all();
        $angles = Angle::all();
        $systems = System::all();
        return view('admin.products.create', compact('series','categories', 'producers', 'angles', 'systems'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//    {
//        $validatedData = $request->validate([
//            'image_data' => 'required|file|mimes:jpeg,jpg,png,gif',
//        ]);
//
//        Storage::disk('public')->putFileAs('/img/uploads/products', new File($validatedData['image_data']), pathinfo($validatedData['image_data']->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $validatedData['image_data']->getClientOriginalExtension());
//        $image_name = pathinfo($validatedData['image_data']->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $validatedData['image_data']->getClientOriginalExtension();
        $product = new Products();
        $image_path = $request->file('image')->store('image', 'public');
        $product->image_path =  $image_path;//Storage::url('img/uploads/products/' . $image_name );
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->serial_id = $request->get('serial_id');
        $product->description = $request->get('description');
        $product->article = $request->get('article');
        $product->system_id = $request->get('system_id');
        $product->producer_id = $request->get('producer_id');
        $product->category_id = $request->get('category_id');
        $product->currency = 'RUB';
        $product->tdf = $request->get('tdf');
        $product->tdf_ros = $request->get('tdf_ros');
        $product->ves = $request->get('ves');
        $product->barcode = $request->get('barcode');
        $product->model = $request->get('model');
        $product->angle_id = $request->get('angle_id');

        $product->save();
        // Products::query()->create($request->all());
        return redirect()->route('admin-products.index')->with('status', 'Продукт успешно добавлен');
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
    public function destroy($id)
    {
        $category = Products::find($id);
        $category->delete();
        return redirect()->route('admin-products.index')->with('success','Продукт успешно удален');
    }
}
