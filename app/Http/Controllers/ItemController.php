<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\order_items;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $data = Item::paginate(100, ['*'], 'page');
        return view('main/index', compact('data'));
    }

    public function modal()
    {

        $data = Item::paginate(100, ['*'], 'page');
        return view('main/modal', compact('data'));
    }


     public function shop(Request $request)
     {
 
        $data = Item::paginate(100, ['*'], 'page');

        $s =  $cart = $request->session()->all();

        $cart = isset($s['cart']) ? $s['cart'] : array(); 

        // check in cart

        foreach($data as $key => $value){
            if(array_key_exists($value->id, $cart)){
                $value->in_cart = 1;
                $value->count = $cart[$value->id]['count'];
            }
        }


        return view('shop/catalog', compact('data', 'cart'));
    }

    public function shop_detail(Request $request, $id)
    {
        $item = Item::where('id', $id)->first();
        

        $items = Item::where('is_recom', 1)->limit(4)->get();

        $s =  $cart = $request->session()->all();

        $cart = isset($s['cart']) ? $s['cart'] : array(); 

        if(array_key_exists($item->id, $cart)){
            $item->in_cart = 1;
            $item->count = $cart[$item->id]['count'];
        }

        foreach($items as $key => $value){
            if(array_key_exists($value->id, $cart)){
                $value->in_cart = 1;
                $value->count = $cart[$value->id]['count'];
            }
        }

        return view('shop/catalog/detail-page', compact('item', 'items', 'cart'));

    }

    public function history(Request $request){


        $user = Auth::user();

        $items = order_items::where('user_id', $user->id)->get();

        $new_items = array();

        foreach ($items as $key => $value) {

            $json =  (array) json_decode($value->json , 1);
            $new_items[$key] = (array) json_decode($value);
            $new_items[$key]['json_new'] = $json;

        }

        foreach ($new_items as $key => $value) {

            foreach ($value['json_new'] as $keyvalue => $valuevalue) {
                $keys[] = $keyvalue;
            }
            
            $value['sub_items'] = (array) json_decode(Item::whereIn('id', $keys)->get(), 1);

            $data[$key] = $value;

        }


        if(empty($data)){
            $new_items = array();
        }else{
            $new_items = $data;
        }


        return view('shop/catalog/history-page', compact('new_items'));



      
    }



}
