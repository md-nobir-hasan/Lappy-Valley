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
        ['access' => ['Show Product'],'title' => 'Banner', 'child' => [
            ['access' => 'Show Product','title' => 'Media Manager', 'route' => 'file-manager', 'child' => []],
            ['access' => 'Show Product','title' => 'Banners', 'route' => 'banner.*', 'child' => [
                ['access' => 'Show Product','title' => 'Banners', 'route' => 'banner.index'],
                ['access' => 'Show Product','title' => 'Add Banners', 'route' => 'banner.create']
            ]]
        ]],
        ['access' => ['Show Product'],'title' => 'Shop', 'child' => [
            ['access' => 'Show Product','title' => 'Category', 'route' => 'category.*', 'child' => [
                ['access' => 'Show Product','title' => 'Category', 'route' => 'category.index',],
                ['access' => 'Show Product','title' => 'Add Category', 'route' => 'category.create']
            ]],
            ['title' => 'Products', 'route' => 'product.*', 'access'=>'Show Product', 'child' => [
                ['title' => 'Products', 'route' => 'product.index', 'access' => 'Show Product',],
                ['title' => 'Add Products', 'route' => 'product.create','access'=>'Create Product',]
            ]],
            ['access' => 'Show Product','title' => 'Brands', 'route' => 'brand.*', 'child' => [
                ['access' => 'Show Product','title' => 'Brands', 'route' => 'brand.index',],
                ['access' => 'Show Product','title' => 'Add Brands', 'route' => 'brand.create']
            ]],
            ['access' => 'Show Product','title' => 'Shipping', 'route' => 'shipping.*', 'child' => [
                ['access' => 'Show Product','title' => 'Shipping', 'route' => 'shipping.index',],
                ['access' => 'Show Product','title' => 'Add Shipping', 'route' => 'shipping.create']
            ]],
            ['access' => 'Show Product','title' => 'Orders', 'route' => 'order.index', 'child' => []],
            ['access' => 'Show Product','title' => 'Reviews', 'route' => 'review.index', 'child' => []],
        ]],
        ['access' => ['Show Product'],'title' => 'Posts', 'child' => [
            ['access' => 'Show Product','title' => 'Posts', 'route' => 'post.*', 'child' => [
                ['access' => 'Show Product','title' => 'Posts', 'route' => 'post.index'],
                ['access' => 'Show Product','title' => 'Add Posts', 'route' => 'post.create']
            ]],
            ['access' => 'Show Product','title' => 'Category', 'route' => 'post-category.*', 'child' => [
                ['access' => 'Show Product','title' => 'Category', 'route' => 'post-category.index'],
                ['access' => 'Show Product','title' => 'Add Category', 'route' => 'post-category.create']
            ]],
            ['access' => 'Show Product','title' => 'Tags', 'route' => 'post-tag.*', 'child' => [
                ['access' => 'Show Product','title' => 'Tags', 'route' => 'post-tag.index'],
                ['access' => 'Show Product','title' => 'Add Tags', 'route' => 'post-tag.create']
            ]],
            ['access' => 'Show Product','title' => 'Comments', 'route' => 'comment.index', 'child' => []],
        ]],
        ['access' => ['Show Product'],'title' => ' General Settings', 'child' => [
            ['access' => 'Show Product','title' => 'Coupon', 'route' => 'coupon.index', 'child' => []],
            // ['access' => 'Show Product','title' => 'Users', 'route' => 'users.index', 'child' => []],
            ['access' => 'Show Product','title' => 'User Management', 'route' => 'auser.*', 'child' => [
                ['access' => 'Show Product','title' => 'Users', 'route' => 'auser.users.index'],
                ['access' => 'Show Product','title' => 'Roles', 'route' => 'auser.role.index'],
                ['access' => 'Show Product','title' => 'Permissions', 'route' => 'auser.permission'],
            ]],
            ['access' => 'Show Product','title' => 'Settings', 'route' => 'settings', 'child' => []],
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
