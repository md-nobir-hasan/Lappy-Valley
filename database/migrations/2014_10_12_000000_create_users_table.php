<?php

use App\Models\Divission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->bigInteger('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->foreignIdFor(Divission::class)->nullable();
            $table->integer('post_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            // $table->string('decrypt_password')->nullable();
            $table->string('photo')->nullable();
            $table->bigInteger('social_id')->nullable();
            $table->string('role')->default('user');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
