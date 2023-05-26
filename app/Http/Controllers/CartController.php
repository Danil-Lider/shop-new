<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\Item;
// use App\Mail\InvoicePaid;
// use App\Models\Invoice;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){

        $data = $request->session()->all();

        $keys = array();

        if(isset($data['cart'])){

            foreach($data['cart'] as $k => $t){
                $keys[] = $k;
            }

        }

        // dd($data);

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


    public function add_in_cart_store(Request $request){


        if($request->phone &&  $request->name) {

            $items = (array) json_decode($request->items[0]);
            


            $to  = "marfol@inbox.ru" ; 

            $subject = "Запись на примерку"; 

            $message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

            $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
            $headers .= "From: От кого письмо <from@example.com>\r\n"; 
            $headers .= "Reply-To: reply-to@example.com\r\n"; 

            // mail($to, $subject, $message, $headers); 

            if(  mail($to, $subject, $message, $headers)) {

                echo 'good !';

            }else{

                echo 'error';
                
                // $errorMessage = error_get_last()['message'];
                // echo $errorMessage;

            }
     

            // return (new InvoicePaid($items))->render();

            dd($items);

            $data = $request->session()->all();

            $user = Auth::user();
    
            $json = json_encode($data['cart']);
    
            //Способ 1 saved
            $role= new order_items();
            $role->user_id = $user->id;
            $role->json = $json; 
            $role->save();
    
            $request->session()->forget('cart');
        }

      
    }
   
}
