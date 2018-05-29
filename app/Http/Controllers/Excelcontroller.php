<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ExcelController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importExportView(){

        return view('import_export');

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importFile(Request $request)
    {

        config(['excel.import.startRow' => 1 ]);

        if ($request->hasFile('sample_file')) {

            $path = $request->file('sample_file')->getRealPath();

            $data = \Excel::load($path)->get();

//            echo $data;
//            echo $data->count();


            if ($data->count()) {

//                echo 'here!';

//                foreach ($data as $value) {
//
//                    $arr[] = ['title' => $value->title,
//                              'body' => $value->body];
//
//                }

                $var_item_no = 1;

                foreach ($data as $value) {

                    if (!empty($value['receiver_name'])){
                        $var_item_no = 1;
                    }
                    else{
                        $var_item_no += 1;
                    }

                    $arr[] = [
                    'hbl_no'                    => $value['hbl_no'],
                    'sender_name'               => $value['sender_name'],
                    'sender_tel'                => $value['sender_tel'],
                    'sender_address'            => $value['sender_address'],
                    'sender_mgt_id'             => $value['sender_mgt_id'],
                    'box_code'                  => $value['box_code'],
                    'pol'                       => $value['pol'],
                    'receiver_name'             => $value['receiver_name'],
                    'receiver_tel'              => $value['receiver_tel'],
                    'receiver_mobile'           => $value['receiver_mobile'],
                    'receiver_zip_code'         => $value['receiver_zip_code'],
                    'receiver_zip_address'      => $value['receiver_zip_address'],
                    'receiver_address_detail'   => $value['receiver_address_detail'],
                    'receiver_id_info'          => $value['receiver_id_info'],
                    'receiver_memo'             => $value['receiver_memo'],
                    'receiver_type'             => $value['receiver_type'],
                    'e_commerce_type'           => $value['e_commerce_type'],
                    'url'                       => $value['url'],
                    'width'                     => $value['width'],
                    'length'                    => $value['length'],
                    'height'                    => $value['height'],
                    'weight'                    => $value['weight'],
                    'weight_type'               => $value['weight_type'],
                    'box_count'                 => $value['box_count'],
                    'normal_order_type'         => $value['normal_order_type'],
                    'custom_no'                 => $value['custom_no'],
                    'gmarket_mgt_no'            => $value['gmarket_mgt_no'],
                    'item_name'                 => $value['item_name'],
                    'brand_name'                => $value['brand_name'],
                    'unit_price'                => $value['unit_price'],
                    'quantity'                  => $value['quantity'],
                    'hs_code'                   => $value['hs_code'],
                    'freight_term'              => $value['freight_term'],
                    'customer_order_no'         => $value['customer_order_no'],
                    'postoffice_tracking_no'    => $value['postoffice_tracking_no'],
                    'local_language_item_name'  => $value['local_language_item_name'],
                    'currency_type'             => $value['currency_type'],
                    'item_no'                   => $var_item_no
                ];

//                    if (!empty($value['sender_mgt_id'])){
//                        $order_array[] = [
//                            'order_date'	            => $value[''],
//                            'user_id'	                => $value[''],
//                            'shipper_id'	            => $value[''],
//                            'receiver_name'	            => $value['receiver_name'],
//                            'receiver_english_name'	    => $value[''],
//                            'receiver_mobile'	        => $value['receiver_mobile'],
//                            'receiver_tel'	            => $value['receiver_tel'],
//                            'receiver_zip_code'	        => $value['receiver_zip_code'],
//                            'receiver_zip_address'	    => $value['receiver_zip_address'],
//                            'receiver_address_detail'	=> $value['receiver_address_detail'],
//                            'receiver_id_info'	        => $value['receiver_id_info'],
//                            'receiver_memo'	            => $value['receiver_memo'],
//                            'custom_type'	            => $value['custom_no'],
//                            'weight'	                => $value['weight'],
//                            'width'	                    => $value['width'],
//                            'length'	                => $value['length'],
//                            'height'	                => $value['height'],
//                            'box_count'	                => $value['box_count'],
//                            'sender_name'	            => $value['sender_name'],
//                            'sender_tel'	            => $value['sender_tel'],
//                            'sender_mgt_id'	            => $value['sender_mgt_id'],
//                            'sender_address'	        => $value['sender_address']
//                        ];
//
//                        $order_mgt_id = $value['sender_mgt_id'];
//                        $var_item_no = 1;
//
//                    }
//                    else{
//                        $var_item_no += 1;
//
//                    }
//
//                    $item_array[] = [
//                        'item_no'              => $var_item_no,
//                        'item_name'            => $value['item_name'],
//                        'shipping_name'        => '',
//                        'url'                  => $value['url'],
//                        'brand_name'           => $value['brand_name'],
//                        'hs_code'              => $value['hs_code'],
//                        'mgt_id'               => $value['sender_mgt_id'],
//                        'tracking_no'          => '',
//                        'currency_type'        => $value['currency_type'],
//                        'unit_price'           => $value['unit_price'],
//                        'quantity'             => $value['quantity'],
//                        'item_color'           => '',
//                        'item_size'            => ''
//                    ];

                }

//                $result = array_unique($arr);

                $order_id = null;

                if (!empty($arr)) {

                    DB::table('deliveryOrderExcelUpload')->insert($arr);

                    foreach ($arr as $deliveryOrder){
                        if($deliveryOrder['item_no'] === 1){
//                            $order_array[] = [
//                                'order_date'	            => date('Y-m-d'),
//                                'user_id'	                => 'user_id_todo',
//                                'shipper_id'	            => 'shipper_id_todo',
//                                'receiver_name'	            => $value['receiver_name'],
//                                'receiver_english_name'	    => '',
//                                'receiver_mobile'	        => $value['receiver_mobile'],
//                                'receiver_tel'	            => $value['receiver_tel'],
//                                'receiver_zip_code'	        => $value['receiver_zip_code'],
//                                'receiver_zip_address'	    => $value['receiver_zip_address'],
//                                'receiver_address_detail'	=> $value['receiver_address_detail'],
//                                'receiver_id_info'	        => $value['receiver_id_info'],
//                                'receiver_memo'	            => $value['receiver_memo'],
//                                'custom_type'	            => $value['custom_no'],
//                                'weight'	                => $value['weight'],
//                                'width'	                    => $value['width'],
//                                'length'	                => $value['length'],
//                                'height'	                => $value['height'],
//                                'box_count'	                => $value['box_count'],
//                                'sender_name'	            => $value['sender_name'],
//                                'sender_tel'	            => $value['sender_tel'],
//                                'sender_mgt_id'	            => $value['sender_mgt_id'],
//                                'sender_address'	        => $value['sender_address']
//                                ];

                            $order_id = DB::table('deliveryOrder')->insertGetId(
                                [   'order_date'	            => date('Y-m-d'),
                                    'user_id'	                => 'user_id',
                                    'shipper_id'	            => 'shipper_id',
                                    'receiver_name'	            => $deliveryOrder['receiver_name'],
                                    'receiver_english_name'	    => '',
                                    'receiver_mobile'	        => $deliveryOrder['receiver_mobile'],
                                    'receiver_tel'	            => $deliveryOrder['receiver_tel'],
                                    'receiver_zip_code'	        => $deliveryOrder['receiver_zip_code'],
                                    'receiver_zip_address'	    => $deliveryOrder['receiver_zip_address'],
                                    'receiver_address_detail'	=> $deliveryOrder['receiver_address_detail'],
                                    'receiver_id_info'	        => $deliveryOrder['receiver_id_info'],
                                    'receiver_memo'	            => $deliveryOrder['receiver_memo'],
                                    'custom_type'	            => $deliveryOrder['custom_no'],
                                    'weight'	                => $deliveryOrder['weight'],
                                    'width'	                    => $deliveryOrder['width'],
                                    'length'	                => $deliveryOrder['length'],
                                    'height'	                => $deliveryOrder['height'],
                                    'box_count'	                => $deliveryOrder['box_count'],
                                    'sender_name'	            => $deliveryOrder['sender_name'],
                                    'sender_tel'	            => $deliveryOrder['sender_tel'],
                                    'sender_mgt_id'	            => $deliveryOrder['sender_mgt_id'],
                                    'sender_address'	        => $deliveryOrder['sender_address'],
                                    'create_id'                 => 'user_id'       ],
                                    'order_id'
                            );

                        }

                        DB::table('deliveryItem')->insert(
                            [
                                'order_id'                  => $order_id,
                                'item_no'                   => $deliveryOrder['item_no'],
                                'item_name'                 => $deliveryOrder['item_name'],
                                'shipping_name'             => 'shipping_name',
                                'url'                       => $deliveryOrder['url'],
                                'brand_name'                => $deliveryOrder['brand_name'],
                                'hs_code'                   => $deliveryOrder['hs_code'],
                                'mgt_id'                    => $deliveryOrder['sender_mgt_id'],
                                'tracking_no'               => '',
                                'currency_type'             => $deliveryOrder['currency_type'],
                                'unit_price'                => $deliveryOrder['unit_price'],
                                'quantity'                  => $deliveryOrder['quantity'],
                                'item_color'                => 'item_color_todo',
                                'item_size'                 => 'item_size_todo',
                                'create_id'                 => 'user_id'
                            ]
                        );



                    }


                    dd('Insert Recorded successfully.');

                }

            }

            dd('Request data does not have any files to import.');

        }
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function exportFile($type)
    {

        $products = Product::get()->toArray();


        return \Excel::create('hdtuto_demo', function ($excel) use ($products) {

            $excel->sheet('sheet name', function ($sheet) use ($products) {

                $sheet->fromArray($products);

            });

        })->download($type);

    }


}
