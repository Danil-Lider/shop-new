<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Item::paginate(10, ['*'], 'page');
        return view('shop/index-page', compact('data'));
    }


    public function shop(Request $request)
    {

        $data = Item::paginate(10, ['*'], 'page');

        $s =  $cart = $request->session()->all();

        $cart = isset($s['cart']) ? $s['cart'] : array(); 

        return view('shop/catalog/catalog-page', compact('data', 'cart'));
    }


    public function shop_detail(Request $request, $id)
    {
        $data = Item::where('id', $id)->first();

        // dd($data);

        return view('shop/catalog/detail-page', compact('data'));

    }

    public function cart_index(Request $request){

        $data = $request->session()->all();

        $keys = array();

        if($data['cart']){

            foreach($data['cart'] as $k => $t){
                $keys[] = $k;
            }

        }

        dd($data);

        $items = Item::whereIn('id', $keys)->get();
    
        return view('shop/catalog/cart-page', compact('data', 'items'));
      
    }

    public function cart(Request $request)
    {
        $id = isset($request->id) ?  $request->id : 0;
        $count = isset($request->count) ?  $request->count : 1;
        $size = isset($request->size) ?  $request->size : 1;

        // print_r($request->size);

        if($request->act == 'RemoveFromBasket'){

            if($request->item_id){

                $data = $request->session()->all();
    
                if(isset($data['cart'])){
                    $cart = $data['cart'];

                    unset($cart[$request->item_id]);

                }else{
                    $cart = array();
                }
    
                session(['cart' => $cart]);
    
                print_r($cart);
    
            }

        }

        if($request->act == 'addToBasket'){


            if($request->item_id){

                $data = $request->session()->all();
    
                if(isset($data['cart'])){
                    $cart = $data['cart'];
                }else{
                    $cart = array();
                }
    
                
                $cart[$request->item_id] = array('id' => $request->item_id, 'count' => $count, 'size' => $size); 
    
                session(['cart' => $cart]);
    
                print_r($cart);
    
            }


        }

        if($request->act == 'RemoveCountFromBasket'){


            if($request->item_id){

                $data = $request->session()->all();
    
                if(isset($data['cart'])){
                    $cart = $data['cart'];
                }else{
                    $cart = array();
                }
    
                
                $cart[$request->item_id] = array('id' => $request->item_id, 'count' => $count, 'size' => $size); 
    
                session(['cart' => $cart]);
    
                print_r($cart);
    
            }


        }


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
