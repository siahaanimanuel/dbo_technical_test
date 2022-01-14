<?php
   
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
   
class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_driver');
            $table->string('pickup_address');
            $table->string('shipper_name');
            $table->string('shipper_phone');
            $table->string('drop_address');
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('order_type')->nullable();
            $table->string('quantity')->nullable();
            $table->string('notes')->nullable();
            $table->timestamp('date');
            $table->string('price');
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
        Schema::dropIfExists('orders');
    }
}