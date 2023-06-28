<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\order_items;
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

        $end_price = 0;

        foreach($items as $key => $item){
            $end_price += $data['cart'][$item->id]['count'] * $item->price;
        }
    
        return view('shop/catalog/cart-page', compact('data', 'items', 'end_price'));
      
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
    
                return response()->json(['success' => 'success', 'cart' => $cart], 200);
    
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
    
                return response()->json(['success' => 'success', 'cart' => $cart], 200);
    
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
    
                return response()->json(['success' => 'success', 'cart' => $cart], 200);
    
            }


        }


       
    }

    public function TableHeader()
    {
        return '
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Фотография</th>
            <th scope="col">Наименование</th>
            <th scope="col">Цена</th>
            <th scope="col">Размер</th>
          </tr>
        </thead>
        <tbody>';
    }

    public function add_in_cart_store(Request $request){

        $name = $request->name;
        $phone = $request->phone;
        $email =  $request->email;
        $message = $request->message;

        if($phone &&  $name) {

            $items = (array) json_decode($request->items[0]);

            $message = "ФИО: $name \r\n  Телефон: $phone  \r\n  email: $email  \r\n  message: $message ";

            $message .= $this->TableHeader();

            foreach($items as $key => $item){

                $message .= '<tr>';
                $message .= "<th scope='row'> $key </th>";
                $message .= "<td><img height=200 width=150  src=' $item->image' alt=''></td>";
                $message .= "<td> $item->name </td>";
                $message .= "<td> $item->price руб </td>";
                $message .= '<td>Стандартый</td>';
                $message .= '</tr>';  

            }

            $to  = "marfol@inbox.ru" ; 
            $subject = "Запись на примерку"; 
            $headers  = "Content-type: text/html; \r\n"; 
            $headers .= "From: От кого письмо <from@example.com>\r\n"; 
            $headers .= "Reply-To: reply-to@example.com\r\n"; 

            if(  mail($to, $subject, $message, $headers)) {

                // echo 'good !';

            }

            // return (new InvoicePaid($items))->render();

            // dd($items);




            $data = $request->session()->all();

            $user = Auth::user();

            if(isset($data['cart'])){

                $json = json_encode($data['cart']);
    
                //Способ 1 saved
                $role= new order_items();

                $role->user_id = isset($user->id) ? $user->id : 0;

                $role->name = $name;
                $role->phone = $phone;
                $role->email = $email;
                $role->message = $message;


                $role->json = $json; 
                $role->save();
        
                $request->session()->forget('cart');
            }

            return response()->json('Заявка принята !', 200);

            // return redirect()->route('cart')->with('success', 'Заявка принята !');
            

        }

      
    }
   
}
