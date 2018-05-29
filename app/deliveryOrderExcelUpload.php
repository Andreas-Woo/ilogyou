<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deliveryOrderExcelUpload extends Model
{
    public $fillable = ['hbl_no', 'sender_name', 'sender_tel', 'sender_address', 'sender_mgt_id', 'box_code', 'pol', 'receiver_name', 'receiver_tel', 'receiver_mobile', 'receiver_zip_code', 'receiver_zip_address', 'receiver_address_detail', 'receiver_id_info', 'receiver_memo', 'receiver_type', 'e_commerce_type', 'url', 'width', 'length', 'height', 'weight', 'weight_type', 'box_count', 'normal_order_type', 'custom_no', 'gmarket_mgt_no', 'item_name', 'brand_name', 'unit_price', 'quantity', 'hs_code', 'freight_term', 'customer_order_no', 'postoffice_tracking_no', 'local_language_item_name', 'currency_type'];
}
