<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|required|max:255',
            'price' => 'required|string',
            'photo' => 'string|required',
            'final_price' => 'required|string',
            'model' => 'string|nullable|max:255',
            'mpn' => 'string|nullable|max:255',
            'discount' => 'required|numeric',
            'inventory_cost' => 'required|string',
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'stock' => "nullable|numeric",
            'brand_id' => 'nullable|exists:brands,id',
            'cat_id' => 'nullable|exists:categories,id',
            'other_cats.*' => 'nullable|exists:categories,id',
            'child_cat_id' => 'nullable|exists:categories,id',
            'brand_name' => 'nullable|string|max:255',
            'processor_model_name' => 'nullable|string|max:255',
            'processor_generation_name' => 'nullable|string|max:255',
            'display_size_name' => 'nullable|string|max:255',
            'display_type_name' => 'nullable|string|max:255',
            'ram_name' => 'nullable|string|max:255',
            'ssd_name' => 'nullable|string|max:255',
            'hdd_name' => 'nullable|string|max:255',
            'graphic_name' => 'nullable|string|max:255',
            // 'upcomming'=> "sometimes|in:1",
            'is_featured' => 'sometimes|in:1',

            'status' => 'nullable|in:active,inactive',
            // 'condition'=> 'nullable|in:default,new,hot',
            'special_feature' => 'nullable',

            //Processore Attributes
            'processor_generation_id' => 'nullable|exists:processor_generations,id',
            'processor_model_id' => 'nullable|exists:processor_models,id',
            'p_brand' => 'nullable|string|max:255',
            'c_speed' => 'nullable|string|max:255',
            'l1_cache' => 'nullable|string|max:255',
            'l2_cache' => 'nullable|string|max:255',
            'l3_cache' => 'nullable|string|max:255',
            'p_core' => 'nullable|numeric',
            'p_thread' => 'nullable|numeric',

            //display Attributes
            'display_size_id' => 'nullable|exists:display_sizes,id',
            'display_type_id' => 'nullable|exists:display_types,id',
            'd_resolution' => 'nullable|string|max:255',
            'd_other_features' => 'nullable|string',

            //Memory Attributes
            'ram_id' => 'nullable|exists:rams,id',
            'm_type' => 'nullable|string',
            'bus_speed' => 'nullable|string|max:255',
            'm_slot' => 'nullable|numeric',
            'm_removal' => 'sometimes|in:1',
            'm_other' => 'nullable|string',

            //Storage Attributes
            'ssd_id' => 'nullable|exists:ssds,id',
            'hdd_id' => 'nullable|exists:hdds,id',
            's_slot' => 'nullable|numeric',
            's_extra_m2_slot' => 'sometimes|in:1',
            's_support_type' => 'nullable|string|max:255',
            's_upgrade' => 'nullable|string|max:255',

            //Graphic Attributes
            'graphic_id' => 'nullable|exists:graphics,id',
            'g_model' => 'nullable|string|max:255',

            //Keyboar & Touchpad Attributes
            'k_type' => 'nullable|string|max:255',
            'touchpad' => 'sometimes|in:1',

            //Camera & Audio Attributes
            'webcam' => 'nullable|string|max:255',
            'microphone' => 'nullable|string|max:255',
            'speaker' => 'nullable|string|max:255',

            //Ports & Slots Attributes
            'optical_drive' => 'nullable|string|max:255',
            'card_reader' => 'nullable|string|max:255',
            'hdmi_p' => 'nullable|string|max:255',
            'usb2_p' => 'nullable|string|max:255',
            'usb3_p' => 'nullable|string|max:255',
            'type_c_tb_p' => 'nullable|string|max:255',
            'headphone_p' => 'nullable|string|max:255',
            'microphone_p' => 'nullable|string|max:255',

            //Network & Connectivity Attributes
            'wifi' => 'nullable|string|max:255',
            'bluetooth' => 'nullable|string|max:255',

            //Security Attributes
            'finger_print' => 'nullable|string|max:255',

            //Software Attributes
            'operating_system' => 'nullable|string|max:255',

            //Power Attributes
            'battery_type' => 'nullable|string|max:255',
            'battery_capacity' => 'nullable|string|max:255',
            'adapter_type' => 'nullable|string|max:255',

            //Physical Specification Attributes
            'color' => 'nullable|string|max:255',
            'dimension' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',

            //Warranty Attributes
            'w_details' => 'nullable|string|max:255',
            'replacement_warranty' => 'nullable|string|max:255',
            'motherboard_warranty' => 'nullable|string|max:255',
            'service_warranty' => 'nullable|string|max:255',
            'desclaimer ' => 'nullable|string|max:2000',
            'note' => 'nullable|string|max:2000',

            //installment
            'durations.*' => 'nullable|exists:durations,id',

        ];
    }
}
