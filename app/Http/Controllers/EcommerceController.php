<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::get();
        return view('welcome',compact('product'));
    }

    public function list()
    {
        $product = Product::get();
        return view('ecommerce.shop',compact('product'));
    }

    public function mensage()
    {
        return view('ecommerce.contact');
    }

    public function why()
    {
        return view('ecommerce.why');
    }

    public function error404()
    {
        return view('error.404');
    }

    public function error500()
    {
        return view('error.500');
    }

    public function search(Request $request){

        $products = DB::table('products')
        ->where('code', '=', $request->search)
        ->value('id') ?
        $products = DB::table('products')
        ->where('code', '=', $request->search)
        ->value('id') :
        $products = DB::table('products')
        ->where('name', '=', $request->search)
        ->value('id') ;

        $produto = Product::all();
        $produtos = $produto->find($products);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,String $id)
    {
        return redirect()->route('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,String $id)
    {
        $product = Product::findOrFail($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => array(),
            'associatedModel' => $product,
        ]);
        return redirect()->route('cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::get();
        $product = Product::findOrFail($id);
        return view('ecommerce.product',compact('product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
