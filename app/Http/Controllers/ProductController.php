<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::get();
        $product = Product::get();
        return view('admin.products.list',compact('category','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $categories = Category::get();
        return view('admin.products.add')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            'category_id'=> $request->category_id,
        ]);

        if (!$product) {
            return redirect()->back()->with('error', 'Desculpe, Houve um problema ao cadastrar produto.');
        }
        return redirect()->route('products.index')->with('success', 'Sucesso, produto cadastrado com sucesso.');
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
        $categories = Category::get();
        $product = Product::findOrFail($id);
        return view('admin.products.alt',compact('product','categories'));
    }
    public function search(String $pesquisa)
    {
        $produtos = Product::where('name', 'like', "%{$pesquisa}%")->orWhere('code', 'like', "%{$pesquisa}%")->get();
        return $produtos;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
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
        $product->validity = $request->validity;
        $product->company = $request->company;
        $product->provider = $request->provider;
        $product->quantify = $request->quantify;
        $product->cost = $request->cost;

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

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('/product_list');
    }
}
