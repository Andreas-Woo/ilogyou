<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeliveryOrderExcelUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveryOrderExcelUpload', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hbl_no');
            $table->string('sender_name');
            $table->string('sender_tel');
            $table->string('sender_address');
            $table->string('sender_mgt_id');
            $table->string('box_code');
            $table->string('pol');
            $table->string('receiver_name');
            $table->string('receiver_tel');
            $table->string('receiver_mobile');
            $table->string('receiver_zip_code');
            $table->string('receiver_zip_address');
            $table->string('receiver_address_detail');
            $table->string('receiver_id_info');
            $table->string('receiver_memo');
            $table->string('receiver_type');
            $table->string('e_commerce_type');
            $table->string('url');
            $table->string('width');
            $table->string('length');
            $table->string('height');
            $table->string('weight');
            $table->string('weight_type');
            $table->string('box_count');
            $table->string('normal_order_type');
            $table->string('custom_no');
            $table->string('gmarket_mgt_no');
            $table->string('item_name');
            $table->string('brand_name');
            $table->string('unit_price');
            $table->string('quantity');
            $table->string('hs_code');
            $table->string('freight_term');
            $table->string('customer_order_no');
            $table->string('postoffice_tracking_no');
            $table->string('local_language_item_name');
            $table->string('currency_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveryOrderExcelUpload');
    }
}
