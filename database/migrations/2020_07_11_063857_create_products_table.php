<?php

use App\Models\DisplaySize;
use App\Models\DisplayType;
use App\Models\Graphic;
use App\Models\hdd;
use App\Models\ProcessorGeneration;
use App\Models\ProcessorModel;
use App\Models\ProductOffer;
use App\Models\Ram;
use App\Models\SpecialFeature;
use App\Models\ssd;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            //  😯😲😲 (71 fields) .. 😯😲😲

            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->unsignedBigInteger('price');
            $table->text('photo');
            $table->unsignedBigInteger('final_price');
            $table->float('discount')->nullable();
            $table->text('model')->nullable();
            $table->string('mpn')->nullable();
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->integer('stock')->nullable()->default(1);
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('child_cat_id')->nullable();
            $table->date('upcomming')->nullable();
            $table->boolean('is_featured')->deault(false);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->longText('special_feature')->nullable();
            $table->integer('average_rating')->default(5);
            $table->unsignedBigInteger('views')->nullable();
            // $table->string('size')->default('M')->nullable();
            // $table->enum('condition',['default','new','hot'])->default('default');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreignIdFor(ProductOffer::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            //Processore Attributes
            $table->foreignIdFor(ProcessorModel::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ProcessorGeneration::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('p_brand')->nullable();
            $table->string('c_speed')->nullable(); //Processore frequency
            $table->string('l1_cache')->nullable();
            $table->string('l2_cache')->nullable();
            $table->string('l3_cache')->nullable();
            $table->integer('p_core')->nullable();
            $table->integer('p_thread')->nullable();

            //Display Attributes
            $table->foreignIdFor(DisplaySize::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(DisplayType::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('d_resolution')->nullable();
            $table->text('d_other_features')->nullable();
            $table->boolean('touch_screen')->default(false);

            //Memory Attributes (RAM)
            $table->foreignIdFor(Ram::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('m_slot')->nullable();
            $table->boolean('m_removal')->default(false);

            //Storage Attributes (HDD/SSD)
            $table->foreignIdFor(ssd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(hdd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('s_slot')->nullable();
            $table->boolean('s_extra_m2_slot')->default(false);
            $table->string('s_support_type')->nullable();
            $table->string('s_upgrade')->nullable();

            //Graphics Attributes
            $table->string('g_model')->nullable();
            $table->foreignIdFor(Graphic::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate(); //graphics memory

            //Keyboard & Touchpad
            $table->string('k_type')->nullable();
            $table->boolean('touchpad')->default(false);

            //Camera & Audio
            $table->string('webcam')->nullable();
            $table->string('microphone')->nullable();
            $table->string('speaker')->nullable();

            //Ports & slots
            $table->string('optical_drive')->nullable();
            $table->string('card_reader')->nullable();
            $table->string('hdmi_p')->nullable(); //p = Port
            $table->string('usb2_p')->nullable();
            $table->string('usb3_p')->nullable();
            $table->string('type_c_tb_p')->nullable();//USB type c/ tb = thunderbolt Port
            $table->string('headphone_p')->nullable();
            $table->string('microphone_p')->nullable();

            //Network & connectivity
            $table->string('wifi')->nullable();
            $table->string('bluetooth')->nullable();

            //Security
            $table->string('finger_print')->nullable();

            //Software
            $table->string('operating_system')->nullable();

            //Power
            $table->string('battery_type')->nullable();
            $table->string('battery_capacity')->nullable();
            $table->string('adapter_type')->nullable();

            //Physical Specification
            $table->string('color')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();

            //Warranty
            $table->string('w_details')->nullable(); //wrranty details


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
        Schema::dropIfExists('products');
    }
}
