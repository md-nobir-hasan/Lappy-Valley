<?php

use App\Models\Divission;
use App\Models\OrderStatus;
use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique()->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('shipping_id')->nullable();
            $table->float('coupon')->nullable();
            $table->float('sub_total',12,2)->nullable();
            $table->float('amount',12,2)->nullable();
            $table->float('payable',12,2)->default(0);
            $table->integer('installment_count')->default(1);
            $table->unsignedBigInteger('inventory_cost')->default(0);
            $table->integer('quantity')->nullable();
            $table->enum('payment_method',['cod','online'])->default('cod');
            $table->enum('payment_status',['paid','unpaid'])->default('unpaid');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('SET NULL');
            $table->string('name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->unsignedBigInteger('coupon_dis')->default(0);
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->default('Pending');
            $table->text('comment')->nullable();
            $table->foreignIdFor(Divission::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
