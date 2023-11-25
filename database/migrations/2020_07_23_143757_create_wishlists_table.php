<?php

use App\Models\Cart;
use App\Models\Product;
use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Cart::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->unsignedBigInteger('cart_id')->nullable();
            // $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('price');
            $table->integer('quantity');
            $table->string('ip')->unique()->nullable();
            $table->unsignedBigInteger('amount');
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            // $table->foreign('cart_id')->references('id')->on('carts')->onDelete('SET NULL');
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
        Schema::dropIfExists('wishlists');
    }
}
