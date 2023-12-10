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
            $table->string('model');
            $table->string('mpn');
            $table->unsignedBigInteger('price');
            $table->float('discount')->nullabale();
            $table->unsignedBigInteger('final_price');
            $table->text('summary');
            $table->longText('description')->nullable();
            $table->text('photo');
            $table->integer('stock')->nullable()->default(1);
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('child_cat_id')->nullable();
            $table->date('upcomming')->nullable();
            $table->boolean('is_featured')->deault(false);
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->longText('special_feature');
            $table->integer('average_rating')->default(5);
            $table->unsignedBigInteger('views')->nullable();
            // $table->string('size')->default('M')->nullable();
            // $table->enum('condition',['default','new','hot'])->default('default');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreignIdFor(ProductOffer::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            //Processore Attributes
            $table->foreignIdFor(ProcessorModel::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ProcessorGeneration::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('p_brand');
            $table->string('c_speed'); //Processore frequency
            $table->string('l1_cache');
            $table->string('l2_cache');
            $table->string('l3_cache');
            $table->integer('p_core')->nullable();
            $table->integer('p_thread')->nullable();

            //Display Attributes
            $table->foreignIdFor(DisplaySize::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(DisplayType::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('d_resolution');
            $table->text('d_other_features')->nullable();
            $table->boolean('touch_screen')->default(false);

            //Memory Attributes (RAM)
            $table->foreignIdFor(Ram::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('m_slot');
            $table->boolean('m_removal')->default(false);

            //Storage Attributes (HDD/SSD)
            $table->foreignIdFor(ssd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(hdd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('s_slot')->nullable();
            $table->boolean('s_extra_m2_slot')->default(false);
            $table->string('s_support_type')->nullable();
            $table->string('s_upgrade');

            //Graphics Attributes
            $table->string('g_model')->nullable();
            $table->foreignIdFor(Graphic::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate(); //graphics memory

            //Keyboard & Touchpad
            $table->string('k_type');
            $table->boolean('touchpad')->default(false);

            //Camera & Audio
            $table->string('webcam');
            $table->string('microphone');
            $table->string('speaker');

            //Ports & slots
            $table->string('optical_drive')->nullable();
            $table->string('card_reader')->nullable();
            $table->string('hdmi_p'); //p = Port
            $table->string('usb2_p');
            $table->string('usb3_p');
            $table->string('type_c_tb_p');//USB type c/ tb = thunderbolt Port
            $table->string('headphone_p');
            $table->string('microphone_p');

            //Network & connectivity
            $table->string('wifi');
            $table->string('bluetooth');

            //Security
            $table->string('finger_print')->nullable();

            //Software
            $table->string('operating_system');

            //Power
            $table->string('battery_type');
            $table->string('battery_capacity');
            $table->string('adapter_type');

            //Physical Specification
            $table->string('color');
            $table->string('dimension');
            $table->string('weight');

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
