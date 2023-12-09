<?php

use App\Models\ProductReview;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_review_imags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductReview::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_review_imags');
    }
};
