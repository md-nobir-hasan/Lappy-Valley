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
            $table->float('discount')->nullabale();
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
            $table->longText('special_feature')->nullabale();
            $table->integer('average_rating')->default(5);
            $table->unsignedBigInteger('views')->nullable();
            // $table->string('size')->default('M')->nullable();
            // $table->enum('condition',['default','new','hot'])->default('default');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreignIdFor(ProductOffer::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            //Processore Attributes
            $table->foreignIdFor(ProcessorModel::class)->nullabale()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ProcessorGeneration::class)->nullabale()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('p_brand')->nullabale();
            $table->string('c_speed')->nullabale(); //Processore frequency
            $table->string('l1_cache')->nullabale();
            $table->string('l2_cache')->nullabale();
            $table->string('l3_cache')->nullabale();
            $table->integer('p_core')->nullable();
            $table->integer('p_thread')->nullable();

            //Display Attributes
            $table->foreignIdFor(DisplaySize::class)->nullabale()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(DisplayType::class)->nullabale()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('d_resolution')->nullabale();
            $table->text('d_other_features')->nullable();
            $table->boolean('touch_screen')->default(false);

            //Memory Attributes (RAM)
            $table->foreignIdFor(Ram::class)->nullabale()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('m_slot')->nullabale();
            $table->boolean('m_removal')->default(false);

            //Storage Attributes (HDD/SSD)
            $table->foreignIdFor(ssd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(hdd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('s_slot')->nullable();
            $table->boolean('s_extra_m2_slot')->default(false);
            $table->string('s_support_type')->nullable();
            $table->string('s_upgrade')->nullabale();

            //Graphics Attributes
            $table->string('g_model')->nullable();
            $table->foreignIdFor(Graphic::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate(); //graphics memory

            //Keyboard & Touchpad
            $table->string('k_type')->nullabale();
            $table->boolean('touchpad')->default(false);

            //Camera & Audio
            $table->string('webcam')->nullabale();
            $table->string('microphone')->nullabale();
            $table->string('speaker')->nullabale();

            //Ports & slots
            $table->string('optical_drive')->nullable();
            $table->string('card_reader')->nullable();
            $table->string('hdmi_p')->nullabale(); //p = Port
            $table->string('usb2_p')->nullabale();
            $table->string('usb3_p')->nullabale();
            $table->string('type_c_tb_p')->nullabale();//USB type c/ tb = thunderbolt Port
            $table->string('headphone_p')->nullabale();
            $table->string('microphone_p')->nullabale();

            //Network & connectivity
            $table->string('wifi')->nullabale();
            $table->string('bluetooth')->nullabale();

            //Security
            $table->string('finger_print')->nullable();

            //Software
            $table->string('operating_system')->nullabale();

            //Power
            $table->string('battery_type')->nullabale();
            $table->string('battery_capacity')->nullabale();
            $table->string('adapter_type')->nullabale();

            //Physical Specification
            $table->string('color')->nullabale();
            $table->string('dimension')->nullabale();
            $table->string('weight')->nullabale();

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
