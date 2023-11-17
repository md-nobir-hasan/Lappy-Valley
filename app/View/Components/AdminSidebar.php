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
        ['title' => 'Banner', 'child' => [
            ['title' => 'Media Manager', 'route' => 'file-manager', 'child' => []],
            ['title' => 'Banners', 'route' => 'banner.*', 'child' => [
                ['title' => 'Banners', 'route' => 'banner.index'],
                ['title' => 'Add Banners', 'route' => 'banner.create']
            ]]
        ]],
        ['title' => 'Shop', 'child' => [
            ['title' => 'Category', 'route' => 'category.*', 'child' => [
                ['title' => 'Category', 'route' => 'category.index',],
                ['title' => 'Add Category', 'route' => 'category.create']
            ]],
            ['title' => 'Products', 'route' => 'product.*', 'child' => [
                ['title' => 'Products', 'route' => 'product.index',],
                ['title' => 'Add Products', 'route' => 'product.create']
            ]],
            ['title' => 'Brands', 'route' => 'brand.*', 'child' => [
                ['title' => 'Brands', 'route' => 'brand.index',],
                ['title' => 'Add Brands', 'route' => 'brand.create']
            ]],
            ['title' => 'Shipping', 'route' => 'shipping.*', 'child' => [
                ['title' => 'Shipping', 'route' => 'shipping.index',],
                ['title' => 'Add Shipping', 'route' => 'shipping.create']
            ]],
            ['title' => 'Orders', 'route' => 'order.index', 'child' => []],
            ['title' => 'Reviews', 'route' => 'review.index', 'child' => []],
        ]],
        ['title' => 'Posts', 'child' => [
            ['title' => 'Posts', 'route' => 'post.*', 'child' => [
                ['title' => 'Posts', 'route' => 'post.index'],
                ['title' => 'Add Posts', 'route' => 'post.create']
            ]],
            ['title' => 'Category', 'route' => 'post-category.*', 'child' => [
                ['title' => 'Category', 'route' => 'post-category.index'],
                ['title' => 'Add Category', 'route' => 'post-category.create']
            ]],
            ['title' => 'Tags', 'route' => 'post-tag.*', 'child' => [
                ['title' => 'Tags', 'route' => 'post-tag.index'],
                ['title' => 'Add Tags', 'route' => 'post-tag.create']
            ]],
            ['title' => 'Comments', 'route' => 'comment.index', 'child' => []],
        ]],
        ['title' => ' General Settings', 'child' => [
            ['title' => 'Coupon', 'route' => 'coupon.index', 'child' => []],
            ['title' => 'Users', 'route' => 'users.index', 'child' => []],
            ['title' => 'Settings', 'route' => 'settings', 'child' => []],
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
