<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\Item;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Item::paginate(10, ['*'], 'page');

        return view('shop/index-page    ', compact('data'));
    }


    public function shop(Request $request)
    {

        $data = Item::paginate(10, ['*'], 'page');

        $s =  $cart = $request->session()->all();

        $cart = isset($s['cart']) ? $s['cart'] : array(); 

        return view('shop/catalog/catalog-page', compact('data', 'cart'));
    }

    public function cart(Request $request)
    {

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
    
                
                $cart[$request->item_id] = $request->item_id; 
    
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
