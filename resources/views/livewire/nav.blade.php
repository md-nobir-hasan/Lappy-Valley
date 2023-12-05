{{-- <section class="bg-[#F2F2F2] h-[51px]  py-4 px-[100px]">
    <nav class="font-[Jost] flex justify-between">
        <ul class="relative" x-data="{ open: false }">
            <li class='flex items-center gap-[5px] jost h-[23px]'>
                <a href="{{ route('shop') }}" wire:navigate
                    class="font-[jost-font] font-[500] text-[16px] text-[#353535] flex items-center">
                    All Categories
                </a>
                <span class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" @click="open = ! open" class='w-[14.9991px] h-[16px] mt-[3px]'
                        viewBox="0 0 15 17" fill="none">
                        <g clip-path="url(#clip0_1014_691)">
                            <path
                                d="M14.5767 9.28318L9.88953 14.2832C9.82421 14.3531 9.74659 14.4086 9.66113 14.4464C9.57567 14.4843 9.48405 14.5038 9.39151 14.5038C9.29897 14.5038 9.20735 14.4843 9.12189 14.4464C9.03643 14.4086 8.95881 14.3531 8.89349 14.2832L4.20629 9.28318C4.0742 9.14228 4 8.95118 4 8.75193C4 8.55267 4.0742 8.36157 4.20629 8.22068C4.33837 8.07978 4.51751 8.00063 4.7043 8.00063C4.89109 8.00063 5.07024 8.07978 5.20232 8.22068L9.3921 12.6901L13.5819 8.22005C13.714 8.07916 13.8931 8 14.0799 8C14.2667 8 14.4458 8.07916 14.5779 8.22005C14.71 8.36095 14.7842 8.55204 14.7842 8.7513C14.7842 8.95056 14.71 9.14165 14.5779 9.28255L14.5767 9.28318Z"
                                fill="#353535" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1014_691">
                                <rect width="14.9991" height="16" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </li>
            <ul  x-show="open" :class="{'block': open }"
                class='absolute hidden leading-[38px] py-[15px] px-[10px] items-center bg-[#f2f2f2] w-[195px] z-[9999] left-0 top-0 mt-[34px] mr-[3px]'>
                @foreach ($menus as $menu)
                    <a href="{{ route('cate_wise.shop', [$menu->slug]) }}" wire:navigate >
                        <li 
                            class='text-center w-full text-[16px] text-[#353535] font-[jost] font-[500] rounded-[2px] hover:bg-[#380D37] hover:text-[#f2f2f2] border-b-[1px] border-[#380D37]'>

                            {{ $menu->title }}
                        </li>
                    </a>
                @endforeach
            </ul>

        </ul>
        @foreach ($menus as $menu)
            <ul class="relative " x-data="{ open: false }">
                <li class='flex items-center gap-[5px] jost h-[23px]'>
                    <a href="{{ route('cate_wise.shop', [$menu->slug]) }}" wire:navigate
                        class="font-[jost] text-[16px] text-[#353535] flex items-center">
                        {{ $menu->title }}
                    </a>
                    <span class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" @click="open = ! open"
                            class='w-[14.999px] h-[16px] mt-[3px]' viewBox="0 0 15 17" fill="none">
                            <g clip-path="url(#clip0_1014_691)">
                                <path
                                    d="M14.5767 9.28318L9.88953 14.2832C9.82421 14.3531 9.74659 14.4086 9.66113 14.4464C9.57567 14.4843 9.48405 14.5038 9.39151 14.5038C9.29897 14.5038 9.20735 14.4843 9.12189 14.4464C9.03643 14.4086 8.95881 14.3531 8.89349 14.2832L4.20629 9.28318C4.0742 9.14228 4 8.95118 4 8.75193C4 8.55267 4.0742 8.36157 4.20629 8.22068C4.33837 8.07978 4.51751 8.00063 4.7043 8.00063C4.89109 8.00063 5.07024 8.07978 5.20232 8.22068L9.3921 12.6901L13.5819 8.22005C13.714 8.07916 13.8931 8 14.0799 8C14.2667 8 14.4458 8.07916 14.5779 8.22005C14.71 8.36095 14.7842 8.55204 14.7842 8.7513C14.7842 8.95056 14.71 9.14165 14.5779 9.28255L14.5767 9.28318Z"
                                    fill="#353535" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1014_691">
                                    <rect width="14.9991" height="16" fill="white" transform="translate(0 0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                </li>

                <ul x-show="open"
                    class='leading-[38px] py-[15px] px-[10px] items-center bg-[#f2f2f2] w-[195px] z-[9999] left-0 top-0 absolute mt-[34px] mr-[3px]'>
                    @foreach ($menu->child_cat as $cc)
                        <a href="{{ route('cate_wise.shop', [$cc->slug]) }}" wire:navigate>
                            <li
                                class='text-center w-full text-[16px] text-[#353535] font-[jost] font-[500] rounded-[2px] hover:bg-[#380D37] hover:text-[#f2f2f2] border-b-[1px] border-[#380D37]'>
                                {{ $cc->title }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </ul>
        @endforeach

        <ul class="relative">
            <li class='flex items-center gap-[5px] jost h-[23px]'>
                <a href="{{ route('about_us') }}" wire:navigate
                    class="font-[jost] text-[16px] text-[#353535] flex items-center">
                    Hotline: +880171264420
                </a>
            </li>
        </ul>
    </nav>
</section> --}}


<div class="bg-[#F2F2F2] h-[51px]  py-4 px-[100px] flex justify-between text-center items-center">
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            All Categories
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2 hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>USA Variant</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Brand New</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MAC Book</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Pre-Owned</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Gaming Laptop</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Student Laptop</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asian Variant</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Hotline</a>
            </li>

        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            USA Variant
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="w-full border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            Brand New
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            MAC Book
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            Pre-Owned
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            Gaming Laptop
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            Student Laptop
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            Asian Variant
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
    <div class="relative" data-te-dropdown-ref>
        <a class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
            href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
            data-te-ripple-init data-te-ripple-color="light">
            Hotline:+8880171264420
            <span class="ml-2 w-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </a>
        <ul class="absolute z-[1000] float-left p-2  hidden w-full list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Asus</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>DELL</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>HP</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Lenovo</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Acer</a>
            </li>
            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>Apple</a>
            </li>

            <li
                class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                    href="#" data-te-dropdown-item-ref>MSI</a>
            </li>


        </ul>
    </div>
</div>
