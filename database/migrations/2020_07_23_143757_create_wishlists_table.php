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
            $table->unsignedBigInteger('price');
            $table->integer('quantity');
            $table->string('ip')->unique()->nullable();
            $table->unsignedBigInteger('amount')->default(0);
            $table->unsignedBigInteger('inventory_cost')->default(0);
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
