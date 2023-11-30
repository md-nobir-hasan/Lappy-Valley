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
            ['access' => 'Show Processor Model','title' => 'Processor Model', 'route' => 'Processor-model.*', 'child' => [
                ['access' => 'Show Processor Model','title' => 'Processor Model', 'route' => 'Processor-model.index',],
                ['access' => 'Create Processor Model','title' => 'Add Processor Model', 'route' => 'Processor-model.create']
            ]],
            ['title' => 'Products', 'route' => 'product.*', 'access'=>'Show Product', 'child' => [
                ['title' => 'Products', 'route' => 'product.index', 'access' => 'Show Product',],
                ['title' => 'Add Products', 'route' => 'product.create','access'=>'Create Product',]
            ]],
            ['access' => 'Show Brand','title' => 'Brands', 'route' => 'brand.*', 'child' => [
                ['access' => 'Show Brand','title' => 'Brands', 'route' => 'brand.index',],
                ['access' => 'Create Brand','title' => 'Add Brands', 'route' => 'brand.create']
            ]],
            ['access' => 'Show Shipping','title' => 'Shipping', 'route' => 'shipping.*', 'child' => [
                ['access' => 'Show Shipping','title' => 'Shipping', 'route' => 'shipping.index',],
                ['access' => 'Create Shipping','title' => 'Add Shipping', 'route' => 'shipping.create']
            ]],
            ['access' => 'Show Order','title' => 'Orders', 'route' => 'order.index', 'child' => []],
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
        ['access' => ['Show Cupon', 'Show User', 'Setting'],'title' => ' General Settings', 'child' => [
            ['access' => 'Show Cupon','title' => 'Coupon', 'route' => 'coupon.index', 'child' => []],
            // ['access' => 'Show Product','title' => 'Users', 'route' => 'users.index', 'child' => []],
            ['access' => 'Show User','title' => 'User Management', 'route' => 'auser.*', 'child' => [
                ['access' => 'Show User','title' => 'Users', 'route' => 'auser.users.index'],
                ['access' => 'Show Role','title' => 'Roles', 'route' => 'auser.role.index'],
                ['access' => 'Show Permission','title' => 'Permissions', 'route' => 'auser.permission'],
            ]],
            ['access' => 'Setting','title' => 'Settings', 'route' => 'settings', 'child' => []],
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
