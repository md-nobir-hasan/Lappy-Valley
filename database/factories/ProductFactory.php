<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon as SupportCarbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = ['HP','Levovo',"Apple",'Asus','Acer','Walton'];
        // $ds = [13,13.6,14,15.6,17,11.6];
        $upcomming = [null,null,SupportCarbon::today()->toDateString(),null];
        $is_featured = [true,false];
        $prodct_offer = [null,1];
        return [
            'slug' => fake()->unique()->uuid(),
            'title' => $brand[rand(0,5)]." IdeaPad 15AMN7 AMD Ryzen 57520U ".fake()->word(1),
            'model' => "15AMN7",
            'mpn' => '82VG0088YIN',
            'price' => rand(12000,500000),
            'discount' => rand(0,60),
            'final_price' => rand(12000,400000),
            'summary' => fake()->paragraph(),
            'description' => fake()->paragraph(2),
            'photo' => "/storage/product/large-size-laptop.jpg,/storage/product/large-size-laptop.jpg,/storage/product/large-size-laptop.jpg",
            'stock' => rand(1,20),
            'brand_id' => rand(1,6),
            'cat_id' => rand(1,8),
            'child_cat_id' => rand(8,30),
            'upcomming' => $upcomming[rand(0,3)],
            'is_featured' => $is_featured[rand(0,1)],
            'status' => 'active',
            'special_feature' => 'Backlit Keyboard',
            'average_rating' => rand(1,5),
            'views' => rand(0,20),
            'product_offer_id' => $prodct_offer[rand(0,1)],
            //processor Attributes
            'processor_model_id' => rand(1,15),
            'processor_generation_id' => rand(1,14),
            'p_brand' =>'Intel',
            'c_speed' => '2.8 GHz upto 4.3 GHz',
            'l1_cache' => '256 KB',
            'l2_cache' => '2 MB',
            'l3_cache' => '4 MB',
            // 'p_core' =>2,
            'p_thread' => 4,

            //Display attributes
            'display_size_id' => rand(1,6),
            'display_type_id' => rand(1,2),
            'd_resolution' => '1920*1080',
            'd_other' => '220 nits, anti-glare, 171* Viewing Angle',
            'touch_screen'=>false,

            //Memory Attributes (Ram)
            'ram_id' => rand(1,5),
            'm_slot' => 1,
            'm_removal' => false,

            //Storage Attributes (SSD/HDD)
            'ssd_id' => rand(1,4),
            'hdd_id' => rand(1,2),
            's_extra_m2_slot' =>false,
            's_support_type'=>'PCle NVMe M.2',
            's_upgrade'=>'Installed SSD can be upgradeable',

            //Graphics Attributes
            'graphic_id' => rand(1,5),
            'g_model' =>'AMD Radeon 610M',

            //Keyboard & Touchpad Attributes
            'k_type' => 'Standard',
            'touchpad' => true,

            //Camera & Audio Attributes
            'webcam' =>'Yes',
            'microphone'=>'Yes',
            'speaker'=>'Yes',

            //Port & Slots Attributes
            'optical_drive' => null,
            'card_reader'=>'SD Media Card Reader',
            'hdmi_p'=>'1x HDMI 1.4b',
            'usb2_p'=>'1x USB 2.0 Type-A',
            'usb3_p'=> '1x USB 3.2 Gen 1 Type-A',
            'type_c_tb_p'=> '1x USB-C 3.2 Gen 1 (Support data transfer only)',
            'headphone_p'=>'1x Headphone',
            'microphone_p'=>'Microphone Port Combo',

            //Network & Connectivity Attributes
            'wifi'=> '11ax, 2x2',
            'bluetooth'=> 'Bluetooth 5.0',

            //Security Attributes
            'finger_print'=>null,

            //Software Attributes
            'operating_system'=>'Windows',

            //Power Attributes
            'battery_type'=>'3 Cell Li-ion',
            'battery_capacity'=>'42Whr',
            'adapter_type'=>'65W Round Tip(3-pin)',

            //Physical Specification Attributes
            'color'=>'Cloud Grey',
            'dimension'=>'325.3 x 216.5 x 17.9 mm',
            'weight'=>'1.58 kg',

            //Warranty Attributes
            'w_details'=>'2 years warranty (Battery adapter 1 year)',
        ];
    }
}
