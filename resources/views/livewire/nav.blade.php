 <div
     class="bg-[#F2F2F2] h-[51px] py-4 2xl:px-[100px] xl:px-[50px] max-xl:hidden flex justify-between text-center items-center">
     <div class="relative">
         <span
             class="flex items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
             type="button" id="dropdownMenuButton2">
             <a class="nav-color" href="{{ route('shop') }}" wire:navigate> All Categories</a>
             <span class="w-2 ml-2 cursor-pointer menue">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                     <path fill-rule="evenodd"
                         d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                         clip-rule="evenodd" />
                 </svg>
             </span>
         </span>
         <ul
             class="submenu absolute z-[1000] float-left p-2 hidden w-[200px] list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block">
             <li
                 class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                 <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                     href="{{ route('shop') }}" wire:navigate>All</a>
             </li>
             @foreach ($menus as $menu)
                 @if (count($menu->products) > 0)
                     <li
                         class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                         <a class="nav-color hover-colors block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                             href="{{ route('cate_wise.shop', [$menu->slug]) }}" wire:navigate>{{ $menu->title }}</a>
                     </li>
                 @endif
             @endforeach
         </ul>
     </div>
     {{-- @dd($menus) --}}
     @foreach ($menus as $men)
         @if (count($men->products) > 0)
             <div class="relative">
                 <span
                     class="flex items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
                     type="button" id="dropdownMenuButton2">
                     <a class="nav-color" href="{{ route('cate_wise.shop', [$men->slug]) }}"
                         wire:navigate>{{ $men->title }}</a>

                     {{-- checking child has child  --}}
                     @php
                         $has_child = 0;
                     @endphp
                     @foreach ($men->child_cat as $ccc)
                         @if (count($ccc->sub_products) > 0)
                             @php
                                 ++$has_child;
                             @endphp
                         @endif
                     @endforeach
                     @if (count($men->child_cat) > 0 && $has_child)
                         <span class="w-2 ml-2 cursor-pointer menue">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5">
                                 <path fill-rule="evenodd"
                                     d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                     clip-rule="evenodd" />
                             </svg>
                         </span>
                     @endif
                 </span>
                 @if (count($men->child_cat) > 0)
                     <ul
                         class="nav-colors1 submenu absolute z-[1000] float-left p-2  hidden w-[200px] list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block">
                         @foreach ($men->child_cat as $cc)
                             @if (count($cc->sub_products) > 0)
                                 <li
                                     class="w-full border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                                     <a class="nav-color hover-colors block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                                         href="{{ route('cate_wise.shop', [$men->slug, $cc->slug]) }}"
                                         wire:navigate>{{ $cc->title }}</a>
                                 </li>
                             @endif
                         @endforeach
                     </ul>
                 @endif
             </div>
             {{-- @else --}}
             {{-- <div class="relative">
                 <a class="nav-color flex items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
                     href="{{ route('cate_wise.shop', [$men->slug]) }}" wire:navigate type="button"
                     id="dropdownMenuButton2">
                     {{ $men->title }}

                 </a>
             </div> --}}
         @endif
     @endforeach

     <div class="relative">
         <a class="nav-color flex items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
             href="tel:0171264420">
             Hotline: +8880171264420
         </a>
     </div>
 </div>
 @script
     <script>
         $(document).ready(function() {
             $('.menue').each(function(index) {
                 $(this).on('click', function() {
                     if ($('.submenu').eq(index).is(':hidden')) {
                         console.log('i am hidden')
                         $('.submenu').hide(200);
                         $('.submenu').eq(index).show(200);
                     } else {
                         // $('.submenu').hide(200);
                         console.log('i am vissible');
                         $('.submenu').eq(index).hide(200);
                     }
                 })
             })
         })
     </script>
 @endscript
