<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Cart::getContent();
        $troco = 0;
        return view('cart',compact('cartItems','troco'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        //dd($produtos);

        $quantity = 1;
        if($produtos != null){
            Cart::add([
                'id' => $produtos->id,
                'name' => $produtos->name,
                'price' => $produtos->price,
                'quantity' => $quantity,
                'barcode' => $barcode,
                'code' => $code,
                'attributes' => array(
                    'image' => $produtos->image,
                    'stock' => $produtos->stock,
                )
            ]);

            return redirect()->route('cart.list');
        }else{
            return redirect('404');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        return redirect()->route('cart.list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function clearAllCart()
    {
        Cart::clear();
        return redirect()->route('cart.list');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        return redirect()->route('cart.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::remove($request->remover);
        $cartItems = Cart::getContent();
        return view('cart', compact('cartItems'));
    }
    public function cartTroco(Request $request)
    {
        $troco = 0;
        $total = Cart::getTotal();
        if($total == 0 || $total == null){

            $cartItems = Cart::getContent();
            $troco = 0;
            return view('cart',compact('cartItems','troco'));
        }else{

            $cartItems = Cart::getContent();
            $valor = $request->troco;
            $troco = $valor - $total;

            return view('cart',compact('cartItems','troco'));
        }



    }
}
