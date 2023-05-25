<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order_items;

use App\Models\Item;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

// use App\Models\Book;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_in_cart_store(Request $request){

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

        $new_items = $data;
        // dd($data);
        // dd($sub_items);

        return view('shop/catalog/history-page', compact('new_items'));
      
    }

    public function index(Request $request)
    {
     

        $user_id = Auth::id();
       
        $data = DB::table('order_items')
        ->join('items', 'items.id', '=', 'order_items.book_id')
        ->select('items.*', 'order_items.*')
        ->where('user_id', $user_id)
        ->paginate(10);

        // dd($data);

        return view('vue/orders', compact('data'));

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
        $item_id = $request->data['id'];

        $in_database = order_books::where('book_id', $item_id)->first();

        //if(empty($in_database)){

            $book = Book::where('id', $item_id)->first();

            if(Auth::check()){
                
                $modelData = $request->data['modelData'];
                $hour = $request->data['hour_form'];
                
                // $end_to_book = $request->data['end_to_book'];


                $user_id = Auth::id();

                $order_book = new order_books;   

                $order_book->book_id = $item_id;
    
                $order_book->user_id = $user_id;


                $date_from_request = $modelData['year']  . '-' . $modelData['month'] . '-' . $modelData['day'];
    
                $order_book->date_main = date("Y-m-d", (strtotime ($date_from_request) ));

                $order_book->hour = $hour;
    
                $order_book->status = 1;
    
                $order_book->save();

                return json_encode($order_book);
            }


            return json_encode($book);


            
        exit;

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
    public function destroy(Request $request)
    {

        ///echo $request->id;

        order_books::find($request->id)->delete();
        //
    }
}
