<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = new Product();
        if ($request->search) {
            $products = $products->where('name', 'LIKE', "%{$request->search}%");
        }
        $products = $products->latest()->paginate(10);
        if (request()->wantsJson()) {
            return ProductResource::collection($products);
        }
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $image_path = '';

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('products', 'public');
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image_path,
            'barcode' => $request->barcode,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'category_id'=> $request->category,
            'validity'=> $request->validity,
            'company'=> $request->company,
            'provider'=> $request->provider,
            'quantify'=> $request->quantify,
            'cost'=> $request->cost,
        ]);

        if (!$product) {
            return redirect()->back()->with('error', 'Desculpe, Houve um problema ao cadastrar produto.');
        }
        return redirect()->route('products.index')->with('success', 'Sucesso, produto cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $categories = Category::get();
        return view('products.edit')->with('product', $product)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        if (($product->barcode) != ($request->barcode)) {
            $product->barcode = $request->barcode;
        }
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->category_id = $request->category;
        $product->validity=$request->validity;
        $product->company= $request->company;
        $product->provider= $request->provider;
        $product->quantify= $request->quantify;
        $product->cost= $request->cost;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image) {
                Storage::delete($product->image);
            }
            // Store image
            $image_path = $request->file('image')->store('products', 'public');
            // Save to Database
            $product->image = $image_path;

        }

        if (!$product->save()) {
            return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao atualizar produto.');
        }
        return redirect()->route('products.index')->with('Sucesso', 'Produto foi atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        if (!$product->delete()) {
            return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao deletar produto.');
        }else{
            if ($product->image) {
                Storage::delete($product->image);
            }
            return redirect()->route('products.index')->with('Sucesso', 'Produto foi deletado com sucesso.');
        }
    }
}
