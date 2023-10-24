<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Product;
use app\models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Category::get();
        return view('product.list',['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'barcode' => $request->barcode,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'photo' => $request->photo,
        ]);
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
    public function show(string $id)
    {
        $categorias = Category::get();
        $produtos = Product::get();
        return view('product_list',compact('produtos','categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Category::get();
        $products = Product::findOrFail($id);
        return view('product_change',compact('products','categorias'));
    }
        //pesquisar produto por código ou nome
    public function search(String $pesquisa)
    {
        $produtos = Product::where('name', 'like', "%{$pesquisa}%")->orWhere('code', 'like', "%{$pesquisa}%")->get();
        //$produtos = Product::get();
        return $produtos;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::findOrFail($id);

        if($request != null){

        Product::update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'barcode' => $request->barcode,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'photo' => $request->photo,
        ]);

        return redirect('/product_list');

    }else{
        return redirect('/404');
    }
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('/product_list');
    }
}
