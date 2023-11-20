<section class="bg-[#F2F2F2] h-[51px]  py-4 px-[190px]">
    <nav class="font-[Jost] flex justify-between">
        <ul class="relative " x-data="{ open: false }">
            <li class='flex items-center gap-[5px] jost h-[23px]'>
                <a href="{{ route('shop') }}" wire:navigate
                    class="font-[jost] text-[16px] text-[#353535] flex items-center">
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

            <li>
                <ul x-show="open"
                    class='leading-[38px] py-[15px] px-[10px] items-center bg-[#f2f2f2] w-[195px] z-[9999] left-0 top-0 absolute mt-[34px] mr-[3px]'>
                    @foreach ($menus as $menu)
                        <a href="{{ route('cate_wise.shop', [$menu->slug]) }}" wire:navigate>
                            <li
                                class='text-center w-full text-[16px] text-[#353535] font-[jost] font-[500] rounded-[2px] hover:bg-[#380D37] hover:text-[#f2f2f2] border-b-[1px] border-[#353535]'>

                                {{ $menu->title }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </li>
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

                <li>
                    <ul x-show="open"
                        class='leading-[38px] py-[15px] px-[10px] items-center bg-[#f2f2f2] w-[195px] z-[9999] left-0 top-0 absolute mt-[34px] mr-[3px]'>
                        @foreach ($menu->child_cat as $cc)
                            <a href="{{ route('cate_wise.shop', [$cc->slug]) }}" wire:navigate>
                                <li
                                    class='text-center w-full text-[16px] text-[#353535] font-[jost] font-[500] rounded-[2px] hover:bg-[#380D37] hover:text-[#f2f2f2] border-b-[1px] border-[#353535]'>
                                    {{ $cc->title }}
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </li>
            </ul>
        @endforeach

        <ul class="relative" >
            <li class='flex items-center gap-[5px] jost h-[23px]'>
                <a href="{{route('about_us')}}" wire:navigate
                    class="font-[jost] text-[16px] text-[#353535] flex items-center">
                    Hotline: +880171264420
                </a>
            </li>
        </ul>
    </nav>
</section>
