<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Item;
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
        return view('cart.index',compact('cartItems','troco'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $cartItems = Cart::getContent();
        $id_user = auth()->id();
        $quantidade = Cart::getTotalQuantity();

        try {
                Order::create([
                'status' => $request->status,
                'user_id' => $id_user
                ]);

                $idCompra = DB::table('orders')
                ->orderByRaw('created_at DESC')
                ->get()->first();

                foreach ($cartItems as $item) {

                    $item->id;
                    Item::create ([
                        'price'=>$item->price,
                        'quantity'=>$item->quantity,
                        'product_id'=>$item->id,
                        'order_id'=>$idCompra->id
                    ]) ;
                }

                Cart::clear();

                $sales = Order::get();
                return view('ecommerce.success');


        } catch (\Throwable $th) {
            return view('error.404', compact('th'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->id);
        if($product != null){
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $product->image,
                )
            ]);
            return redirect()->route('cart.index');
        }else{
            return redirect('error.404');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
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

        return redirect()->route('cart');
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
        return redirect()->route('cart');
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

        return redirect()->route('cart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        Cart::remove($request->remover);
        $cartItems = Cart::getContent();
        return view('cart.index', compact('cartItems'));
    }
}
