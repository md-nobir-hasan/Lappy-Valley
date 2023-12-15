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
            $table->float('sub_total')->nullable();
            $table->float('amount')->nullable();
            // $table->float('a');
            $table->integer('quantity')->nullable();
            $table->enum('payment_method',['cod','online'])->default('cod');
            $table->enum('payment_status',['paid','unpaid'])->default('unpaid');
            // $table->enum('status',['new','process','delivered','cancel'])->default('new');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('SET NULL');
            $table->string('name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(OrderStatus::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('city')->nullable();
            $table->enum('status',['Pending','New','Processing','Delivered','Canceled'])->default('Pending');
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
