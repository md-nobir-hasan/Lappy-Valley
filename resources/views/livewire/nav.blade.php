 <div
     class="bg-[#F2F2F2] h-[51px]  py-4  2xl:px-[100px] xl:px-[50px] max-xl:hidden flex justify-between text-center items-center">
     <div class="relative">
         <a class="flex menue items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
             href="javascript:void(0)" type="button" id="dropdownMenuButton2"
             >
             <span> All Categories</span>
             <span class="w-2 ml-2">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                     <path fill-rule="evenodd"
                         d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                         clip-rule="evenodd" />
                 </svg>
             </span>
         </a>
         <ul class="submenu absolute z-[1000] float-left p-2 hidden w-[200px] list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
              >
               <li
                     class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                     <a class=" block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                         href="{{ route('shop') }}" wire:navigate
                         >All</a>
                 </li>
             @foreach ($menus as $menu)
                 <li
                     class="border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                     <a class=" block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                         href="{{ route('cate_wise.shop', [$menu->slug]) }}" wire:navigate
                         >{{ $menu->title }}</a>
                 </li>
             @endforeach
         </ul>
     </div>
     @foreach ($menus as $men)
         <div class="relative">
             <a class="menue flex items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
                 href="javascript:void(0)" type="button" id="dropdownMenuButton2"
                  >
                 {{ $men->title }}
                 <span class="w-2 ml-2">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                         <path fill-rule="evenodd"
                             d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </span>
             </a>
             <ul class="submenu absolute z-[1000] float-left p-2  hidden w-[200px] list-none overflow-hidden border-none bg-[#f2f2f2] text-[#353535] text-left [&[data-te-dropdown-show]]:block"
                  >
                 @foreach ($men->child_cat as $cc)
                     <li
                         class="w-full border-b-[1px] border-[#380D37] hover:bg-[#380D37] hover:text-[#f2f2f2] active:bg-[#380D37] active:text-[#f2f2f2]">
                         <a class="block w-full whitespace-nowrap px-4 py-2 font-[jost] font-[500] text-[16px] text-[#35353]"
                             href="{{ route('cate_wise.shop', [$cc->slug]) }}" wire:navigate
                             >{{ $cc->title }}</a>
                     </li>
                 @endforeach
             </ul>
         </div>
     @endforeach

     <div class="relative">
         <a class="flex items-center whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]"
             href="#" type="button" id="dropdownMenuButton2"
             >
             Hotline: +8880171264420
             <span class="ml-[4px] w-2">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                     <path fill-rule="evenodd"
                         d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                         clip-rule="evenodd" />
                 </svg>
             </span>
         </a>
     </div>
 </div>
@script
<script>
    $(document).ready(function(){
        $('.menue').each(function(index){
            $(this).on('click',function(){
                $('.submenu').hide(200);
                $('.submenu').eq(index).show(200);
            })
        })
    })
</script>
@endscript
