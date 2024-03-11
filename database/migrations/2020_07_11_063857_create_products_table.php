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

            //  😯😲😲 (88 fields) .. 😯😲😲
            // main attributes => (22)
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('price');
            $table->text('photo');
            $table->string('final_price');
            $table->float('discount')->default(0);
            $table->string('inventory_cost');
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

            //Processore Attributes => (10)
            $table->foreignIdFor(ProcessorModel::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ProcessorGeneration::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('p_brand')->nullable();
            $table->string('c_speed')->nullable(); //Processore frequency
            $table->string('l1_cache')->nullable();
            $table->string('l2_cache')->nullable();
            $table->string('l3_cache')->nullable();
            $table->integer('p_core')->nullable();
            $table->integer('p_thread')->nullable();
            $table->text('p_other')->nullable();

            //Display Attributes => (6)
            $table->foreignIdFor(DisplaySize::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(DisplayType::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('d_resolution')->nullable();
            // $table->text('d_other_features')->nullable();
            $table->boolean('touch_screen')->default(false);
            $table->text('d_other')->nullable();

            //Memory Attributes (RAM) => (6)
            $table->foreignIdFor(Ram::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('m_type')->nullable();
            $table->integer('bus_speed')->nullable();
            $table->integer('m_slot')->nullable();
            $table->boolean('m_removal')->default(false);
            $table->text('m_other')->nullable();

            //Storage Attributes (HDD/SSD) => (7)
            $table->foreignIdFor(ssd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(hdd::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('s_slot')->nullable();
            $table->boolean('s_extra_m2_slot')->default(false);
            $table->string('s_support_type')->nullable();
            $table->string('s_upgrade')->nullable();
            $table->text('stor_other')->nullable();

            //Graphics Attributes => (3)
            $table->string('g_model')->nullable();
            $table->foreignIdFor(Graphic::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate(); //graphics memory
            $table->string('g_other')->nullable();

            //Keyboard & Touchpad => (3)
            $table->string('k_type')->nullable();
            $table->boolean('k_backlight')->default(false);
            $table->boolean('touchpad')->default(false);
            $table->string('k_other')->nullable();

            //Camera & Audio => (4)
            $table->string('webcam')->nullable();
            $table->string('microphone')->nullable();
            $table->string('speaker')->nullable();
            $table->text('ca_other')->nullable();

            //Ports & slots => (9)
            $table->string('optical_drive')->nullable();
            $table->string('card_reader')->nullable();
            $table->string('hdmi_p')->nullable(); //p = Port
            $table->string('usb2_p')->nullable();
            $table->string('usb3_p')->nullable();
            $table->string('type_c_tb_p')->nullable();//USB type c/ tb = thunderbolt Port
            $table->string('headphone_p')->nullable();
            $table->string('microphone_p')->nullable();
            $table->text('ps_other')->nullable();

            //Network & connectivity => (3)
            $table->string('wifi')->nullable();
            $table->string('bluetooth')->nullable();
            $table->text('nc_other')->nullable();

            //Security => (2)
            $table->string('finger_print')->nullable();
            $table->string('facelock')->nullable();
            $table->text('s_other')->nullable();

            //Software => (2)
            $table->string('operating_system')->nullable();
            $table->text('soft_other')->nullable();

            //Power => (4)
            $table->string('battery_type')->nullable();
            $table->string('battery_capacity')->nullable();
            $table->string('adapter_type')->nullable();
            $table->text('power_other')->nullable();

            //Physical Specification => (4)
            $table->string('color')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();
            $table->text('physi_other')->nullable();

            //Warranty => (1)
            $table->string('replacement_warranty')->nullable(); //replacement_warranty
            $table->string('motherboard_warranty')->nullable(); //motherboard_warranty
            $table->string('service_warranty')->nullable(); //service_warranty
            $table->string('w_details')->nullable(); //Other warranty


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
