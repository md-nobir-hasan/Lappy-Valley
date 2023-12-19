    <div
        class='product-4 grid grid-cols-5 gap-[20px] max-sm:grid-cols-2 max-lg:grid-cols-3 max-md:w-full max-lg:w-[510px] w-[1000px] my-[30px]'>
        <a href="{{ route('oc') }}" wire:navigate>
            <div class='flex gap-[5px] items-center'>
                @if (request()->routeIs('oc'))
                    <img src="/storage/product/icon-ad-black.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                @else
                    <img src="/storage/product/iconoir_profile-circle1.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                @endif
                {{-- <img src="/storage/product/{{request()->routeIs('oc') ? 'icon-ad-black.svg' : 'iconoir_profile-circle1.svg'}}"alt="Product" class='w-[23.36px] h-[26.21px]'> --}}
                <span
                    class='{{ request()->routeIs('oc') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Orders</span>
            </div>
        </a>
        <a href="{{ route('ep') }}" wire:navigate>
            <div class='flex gap-[5px] items-center'>
                @if (request()->routeIs('ep'))
                    <img src="/storage/product/iconoir_profile-circle-black.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                @else
                    <img src="/storage/product/iconoir_profile-circle.svg"alt="Product"
                        class='w-[23.36px] h-[26.21px]'>
                @endif
                {{-- <img src="/storage/product/{{ request()->routeIs('ep') ? 'iconoir_profile-circle-black.svg' : 'iconoir_profile-circle.svg' }}"
                    alt="Product" class='w-[24px] h-[24px]'> --}}
                <span
                    class='{{ request()->routeIs('ep') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Edit
                    Profile</span>
            </div>
        </a>
        <a href="{{ route('cp') }}" wire:navigate>
            <div class='flex gap-[5px] items-center'>
                @if (request()->routeIs('cp'))
                    <img src="/storage/product/carbon_password-black.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                @else
                    <img src="/storage/product/carbon_password.svg"alt="Product"
                        class='w-[23.36px] h-[26.21px]'>
                @endif
                {{-- <img src="/storage/product/{{ request()->routeIs('cp') ? 'carbon_password-black.svg' : 'carbon_password.svg' }}"
                    alt="Product" class='w-[24px] h-[24px]'> --}}
                <span
                    class='{{ request()->routeIs('cp') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Change
                    Password</span>
            </div>
        </a>
        <a href="{{ route('address') }}" wire:navigate>
            <div class='flex gap-[5px] items-center'>
                @if (request()->routeIs('address'))
                    <img src="/storage/product/mdi_address-marker-outline-black.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                @else
                    <img src="/storage/product/mdi_address-marker-outline.svg"alt="Product"
                        class='w-[23.36px] h-[26.21px]'>
                @endif
                {{-- <img src="/storage/product/{{ request()->routeIs('address') ? 'mdi_address-marker-outline-black.svg' : 'mdi_address-marker-outline.svg' }}"
                    alt="Product" class='w-[24px] h-[24px]'> --}}
                <span
                    class='{{ request()->routeIs('address') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Address</span>
            </div>
        </a>
        <a href="{{ route('wishlist') }}" wire:navigate>
            <div class='flex gap-[5px] items-center'>
                @if (request()->routeIs('wishlist'))
                    <img src="/storage/product/Vector-2.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                @else
                    <img src="/storage/product/Vector-light-opacity.svg"alt="Product"
                        class='w-[23.36px] h-[26.21px]'>
                @endif
                {{-- <img src="/storage/product/{{ request()->routeIs('wishlist') ? 'Vector-2.svg' : 'Vector-light-opacity.svg' }}"
                    alt="Product" class='w-[22.3px] h-[20.88px]'> --}}
                <span
                    class='{{ request()->routeIs('wishlist') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Wish
                    List</span>
            </div>
        </a>
    </div>
