<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public   $side_menus = [
        ['access' => ['Show Banner', 'Media Manager'],'title' => 'Banner', 'child' => [
            ['access' => 'Media Manager','title' => 'Media Manager', 'route' => 'file-manager', 'child' => []],
            ['access' => 'Show Banner','title' => 'Banners', 'route' => 'banner.*', 'child' => [
                ['access' => 'Show Banner','title' => 'Banners', 'route' => 'banner.index'],
                ['access' => 'Create Banner','title' => 'Add Banners', 'route' => 'banner.create']
            ]]
        ]],
        ['access' => ['Show Category', 'Show Product', 'Show Brand', 'Show Shipping', 'Show Order', 'Show Review'],'title' => 'Shop', 'child' => [
            ['access' => 'Show Category','title' => 'Category', 'route' => 'category.*', 'child' => [
                ['access' => 'Show Category','title' => 'Category', 'route' => 'category.index',],
                ['access' => 'Create Category','title' => 'Add Category', 'route' => 'category.create']
            ]],
            ['access' => 'Product Attributes','title' => 'Product Attributes', 'route' => 'pa.*', 'child' => [
                ['access' => 'Show Processor Model','title' => 'Processor Model', 'route' => 'pa.processor-model.index',],
                ['access' => 'Show Processor Generation','title' => 'Processor Generation', 'route' => 'pa.processor-generation.index'],
                ['access' => 'Show Display Size','title' => 'Display Size', 'route' => 'pa.display-size.index'],
                ['access' => 'Show Display Type','title' => 'Display Type', 'route' => 'pa.display-type.index'],
                ['access' => 'Show RAM','title' => 'RAM', 'route' => 'pa.ram.index'],
                ['access' => 'Show HDD','title' => 'HDD', 'route' => 'pa.hdd.index'],
                ['access' => 'Show SSD','title' => 'SSD', 'route' => 'pa.ssd.index'],
                ['access' => 'Show Graphic','title' => 'Graphic', 'route' => 'pa.graphic.index'],
                ['access' => 'Show Special Feature','title' => 'Special Feature', 'route' => 'pa.special-feature.index'],
                ['access' => 'Show Product Offer','title' => 'Offer', 'route' => 'pa.product-offers.index'],
            ]],
            ['title' => 'Products', 'route' => 'product.*', 'access'=>'Show Product', 'child' => [
                ['title' => 'Products', 'route' => 'product.index', 'access' => 'Show Product',],
                ['title' => 'Add Products', 'route' => 'product.create','access'=>'Create Product',]
            ]],
            ['access' => 'Show Brand','title' => 'Brands', 'route' => 'brand.*', 'child' => [
                ['access' => 'Show Brand','title' => 'Brands', 'route' => 'brand.index',],
                ['access' => 'Create Brand','title' => 'Add Brands', 'route' => 'brand.create']
            ]],
            ['access' => 'Show Duration','title' => 'Duration', 'route' => 'duration.*', 'child' => [
                ['access' => 'Show Duration','title' => 'Duration', 'route' => 'duration.index',],
                ['access' => 'Create Duration','title' => 'Add Duration', 'route' => 'duration.create']
            ]],
            ['access' => 'Show Shipping','title' => 'Shipping', 'route' => 'shipping.*', 'child' => [
                ['access' => 'Show Shipping','title' => 'Shipping', 'route' => 'shipping.index',],
                ['access' => 'Create Shipping','title' => 'Add Shipping', 'route' => 'shipping.create']
            ]],
            ['access' => 'Show Order','title' => 'Orders', 'route' => 'order.*', 'child' => [
                ['access' => 'Show Order', 'title' => 'Order', 'route' => 'order.index',],
                ['access' => 'Show Order Status', 'title' => 'Order Status', 'route' => 'order-status.index']
            ]],
            ['access' => 'Show Review','title' => 'Reviews', 'route' => 'review.index', 'child' => []],
        ]],

        ['access' => ['Show Post', 'Show pCategory', 'Show Tag', 'Show Comment'],'title' => 'Posts', 'child' => [
            ['access' => 'Show Post','title' => 'Posts', 'route' => 'post.*', 'child' => [
                ['access' => 'Show Post','title' => 'Posts', 'route' => 'post.index'],
                ['access' => 'Create Post','title' => 'Add Posts', 'route' => 'post.create']
            ]],
            ['access' => 'Show pCategory','title' => 'Category', 'route' => 'post-category.*', 'child' => [
                ['access' => 'Show pCategory','title' => 'Category', 'route' => 'post-category.index'],
                ['access' => 'Create pCategory','title' => 'Add Category', 'route' => 'post-category.create']
            ]],
            ['access' => 'Show Tag','title' => 'Tags', 'route' => 'post-tag.*', 'child' => [
                ['access' => 'Show Tag','title' => 'Tags', 'route' => 'post-tag.index'],
                ['access' => 'Create Tag','title' => 'Add Tags', 'route' => 'post-tag.create']
            ]],
            ['access' => 'Show Comment','title' => 'Comments', 'route' => 'comment.index', 'child' => []],
        ]],

        //Report
        ['access' => ['Sales Report', 'Customer Purchase History', 'Order Report', 'Inventory Report'],'title' => 'Report', 'child' => [
            // Sales Report
            ['access' => 'Sales Report','title' => 'Sales Report', 'route' => 'report.sale', 'child' => [
                ['access' => 'Sales Report Daily','title' => 'Daily', 'route' => 'report.sale.daily'],
                ['access' => 'Sales Report Weekly','title' => 'Weekly', 'route' => 'report.sale.weekly'],
                ['access' => 'Sales Report Monthly','title' => 'Monthly', 'route' => 'report.sale.monthly'],
                // ['access' => 'Customer Purchase History','title' => 'Posts', 'route' => 'post.index'],
                // ['access' => 'Order Report','title' => 'Add Posts', 'route' => 'post.create']
            ]],

            // Order Report
            ['access' => 'Order Report','title' => 'Order Report', 'route' => 'report.order', 'child' => [
                ['access' => 'Order Report Daily','title' => 'Daily', 'route' => 'report.order.daily'],
                ['access' => 'Order Report Weekly','title' => 'Weekly', 'route' => 'report.order.weekly'],
                ['access' => 'Order Report Monthly','title' => 'Monthly', 'route' => 'report.order.monthly'],
                ['access' => 'Order Report Yearly','title' => 'Yearly', 'route' => 'report.order.monthly'],
                ['access' => 'Date Wise Order Report','title' => 'Date Wise', 'route' => 'report.order.monthly'],
                ['access' => 'Product Wise Order Report','title' => 'Product Wise', 'route' => 'report.order.monthly'],
            ]],
        ]],

        ['access' => ['Show Cupon', 'Show User', 'Setting'],'title' => ' General Settings', 'child' => [
            ['access' => 'Show SEO', 'title' => 'SEO', 'route' => 'seo.*', 'child' => [
                ['access' => 'Show Google Tag', 'title' => 'Google', 'route' => 'seo.gtag.index'],
                ['access' => 'Show Pixel', 'title' => 'Pixel', 'route' => 'seo.pixel.index'],
            ]],
            ['access' => 'Show Cupon','title' => 'Coupon', 'route' => 'coupon.index', 'child' => []],
            // ['access' => 'Show Product','title' => 'Users', 'route' => 'users.index', 'child' => []],
            ['access' => 'Show User','title' => 'User Management', 'route' => 'auser.*', 'child' => [
                ['access' => 'Show User','title' => 'Users', 'route' => 'auser.users.index'],
                ['access' => 'Show Role','title' => 'Roles', 'route' => 'auser.role.index'],
                ['access' => 'Show Permission','title' => 'Permissions', 'route' => 'auser.permission'],
            ]],

            // ['access' => 'Setting','title' => 'Settings', 'route' => 'settings', 'child' => []],
            ['access' => 'Setting', 'title' => 'Settings', 'route' => 'setting.*', 'child' => [
                ['access' => 'Show Site Setting', 'title' => 'Site Setting', 'route' => 'setting.ss'],
                ['access' => 'Show Others Setting', 'title' => 'Other Setting', 'route' => 'setting.os'],
            ]],
        ]],
    ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-sidebar');
    }
}
