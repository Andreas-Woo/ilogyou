<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class DeliveryOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $orders = DB::select('select * from deliveryOrder');

        echo DB::table('deliveryOrder')->count();

        $list_count = DB::table('deliveryOrder')->count();

        $deliveryOrders = DB::table('deliveryOrder')->select()->get();

//        echo $orders -> mgt_id;
//
//
//        echo substr($orders -> mgt_id,12,4) + 1;
//        echo $orders;

//        return view('deliveryOrder.list');

        return view('businessUser/deliveryOrder.list', ['deliveryOrders' => compact($deliveryOrders), 'list_count' => $list_count]);

        echo 'check2';
    }

    public function list(Request $request){

        $list_count = DB::table('deliveryOrder')->count();

//        $deliveryOrders = DB::table('deliveryOrder')
//            ->select(DB::raw())
////            ->where('sender_mgt_id', '=', $request->get('sender_mgt_id'))
////            ->where('name', 'John')
//            ->paginate(10);

//        $query = 'select *
//                                                     , (SELECT item_name
//                                                          FROM deliveryItem
//                                                         WHERE deliveryOrder.order_id = deliveryItem.order_id
//                                                           AND item_no = 1) as item_name
//                                                     , (SELECT count(*) -1
//                                                          FROM deliveryItem
//                                                         WHERE deliveryOrder.order_id = deliveryItem.order_id) as item_detail
//                                              from deliveryOrder
//                                              order by order_id desc';
//

        $query = 'SELECT *
                         , (SELECT item_name 
                              FROM deliveryItem 
                             WHERE deliveryOrder.order_id = deliveryItem.order_id
                               AND item_no = 1) as item_name
                         , (SELECT count(*) -1 
                              FROM deliveryItem 
                             WHERE deliveryOrder.order_id = deliveryItem.order_id) as item_detail
                  FROM deliveryOrder
                  WHERE 1=1 ';

        if(!empty($request->get('sender_mgt_id'))){
            $query = $query . ' AND sender_mgt_id = \'' . $request->get('sender_mgt_id') . '\'';
        }
        if(!empty($request->get('receiver_name'))){
            $query = $query . ' AND receiver_name = \'' . $request->get('receiver_name') . '\'';
        }

        $query = $query . ' ORDER BY order_id desc';

//        print_r($query);

        $deliveryOrders = DB::select($query);

//        $deliveryOrders_dd = $deliveryOrders->
//            ,[$request->get('sender_mgt_id'), $request->get('receiver_name')]);

//        print_r($deliveryOrders);

        $deliveryOrders_page = $this->arrayPaginator($deliveryOrders, $request);

        return view('businessUser.deliveryOrder.list', ['deliveryOrders' => $deliveryOrders_page, 'list_count' => $list_count, 'request_data' => $request]);
    }

    public function arrayPaginator($array, $request)
    {
        $page = 1;
        $perPage = 10;
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
            ['path' => $request->url(), 'query' => $request->query()]);
    }

    public function list2(Request $request){

        echo 'check! this style';

        $list_count = DB::table('deliveryOrder')->count();

        $deliveryOrders = DB::table('deliveryOrder')->select()->get();


//        return Response::json(View::make('businessUser.deliveryOrder.list', ['deliveryOrders' => $deliveryOrders])->render());

//        return response()->json([
//            'deliveryOrders' => $deliveryOrders
////            'state' => 'CA'
//        ]);

//        return response()->view('businessUser.deliveryOrder.list', ['name' => 'rocky']);

//        return back()->with('msg_ok','successfully sent');




        echo $deliveryOrders;

//        return  response()->view('businessUser.deliveryOrder.list', $deliveryOrders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businessUser/deliveryOrder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        echo $request->get('item_cnt');

        foreach ($request->get('item_no') as $value){
            echo $value;
        }
        foreach ($request->get('item_name') as $value){
            echo $value;
        }
        print_r($_POST);

//        foreach ()

        $order_id = DB::table('deliveryOrder')->insertGetId(
            [   'order_date' => date("Y-m-d"),
                'user_id' => 'andreas',
//                'user_id' => Session::getId(),
                'shipper_id' => $request->get('shipper_id'),
                'receiver_name' => $request->get('receiver_name'),
                'receiver_english_name' => $request->get('receiver_english_name'),
                'receiver_mobile' => $request->get('receiver_mobile'),
                'receiver_tel' => $request->get('receiver_tel'),
                'receiver_zip_code' => $request->get('receiver_zip_code'),
                'receiver_zip_address' => $request->get('receiver_zip_address'),
                'receiver_address_detail' => $request->get('receiver_address_detail'),
                'receiver_id_info' => $request->get('receiver_id_info'),
                'receiver_memo' => $request->get('receiver_memo'),
                'custom_type' => $request->get('custom_type'),
                'weight' => $request->get('weight'),
                'width' => $request->get('width'),
                'length' => $request->get('length'),
                'height' => $request->get('height'),
                'box_count' => $request->get('box_count'),
                'sender_name' => $request->get('sender_name'),
                'sender_tel' => $request->get('sender_tel'),
                'sender_mgt_id' => $request->get('sender_mgt_id'),
                'sender_address' => $request->get('sender_address'),
                'create_id' => 'andreas'],
//                'create_id' => Session::getId()],
            'order_id'
        );
//
//        $val_item_name = $request->get('insert_item_name');
//
        $deliveyItems = array();
//        $item_name = $request->get();

        for ($x = 0 ; $x <= $request->get('item_cnt') ; $x++){
            $deliveyItems[] = array(
                'order_id'  => $order_id,
                'item_no'   => $request->get('item_no')[$x] + 1,
                'item_name' => $request->get('item_name')[$x],
                'shipping_name' => $request->get('shipping_name')[$x],
                'url' => $request->get('url')[$x],
                'brand_name' => $request->get('brand_name')[$x],
                'hs_code' => $request->get('hs_code')[$x],
                'mgt_id' => $request->get('mgt_id')[$x],
                'tracking_no' => $request->get('tracking_no')[$x],
                'currency_type' => $request->get('currency_type')[$x],
                'unit_price' => $request->get('unit_price')[$x],
                'quantity' => $request->get('quantity')[$x],
                'item_color' => $request->get('item_color')[$x],
                'item_size' => $request->get('item_size')[$x],
                'create_id' => $request->get('create_id')[$x]
            );
        }
//
        DB::table('deliveryItem')->insert($deliveyItems);


//        echo static::select(DB::raw('order_id'))->orderBy('order_id','DESC')->first();
//        echo DB::select('select order_id from deliveryOrder')->first();
//
//        DB::table('deliveryOrder')->insert(
//            ['order_id' => '3', 'mgt_id' => $request->get('mgt_id'), 'order_date' => date('Y-m-d')]
////            ['order_id' => 'JR-20180101-0005', 'mgt_id' => 'JR-20180101-1005', 'order_date' => date('Y-m-d')]
//        );

//        $deliveryOrder = new DeliveryOrder*()
//        $passport->name=$request->get('name');

        return redirect()->action('DeliveryOrderController@index');



//        echo "call store method!";
////
//        $deliveryOrders = DB::select('select * from deliveryOrder');
//        return view('deliveryOrder.list', ['orders' => $deliveryOrders]);
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
