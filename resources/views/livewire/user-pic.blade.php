   <div class='flex gap-[10px] items-center my-[20px]'>
       <style>
           @media (max-width:530px) {
               .hello {
                   width: 55px;
                   height: 55px;
               }

               .hello-0 {
                   font-size: 10px;
               }

               .hello-1 {
                   font-size: 14px;
               }

               .now {
                   width: 60px;
                   height: 60px;
                   display: none;
               }

               .amd {
                   font-size: 10px;
               }

               .pay {
                   font-size: 10px;
               }

               .product-4 {
                   width: 370px;
               }

               .cros {
                   width: 18px;
                   height: 18px;
               }

               .laptop-s {
                   width: 35px;
                   height: 35px;
               }

               .amd {
                   line-height: 0px;
               }

               .head-td {
                   font-size: 10px
               }

           }

           @media(min-width:530px) {
               .now-1 {
                   display: none;
               }
           }
       </style>
       <div class='hello w-[74px] h-[74px]'>
       
        @if(auth()->user()->photo)
            <img src="{{auth()->user()->photo}}" alt="Product">
        @else
           <img src="/storage/product/iconoir_profile-circle1.svg" alt="Product">
        @endif
       </div>
       <div>
           <p class='hello-0 text-[16px] max-sm:text-[14px] text-[#000000] font-[Inter] font-[400] leadint-[14.52px]'>
               Hello,
           </p>
           <h1
               class='username text-[20px] max-sm:text-[16px] max-md:text-[] max-lg:text-[] text-[#000000] font-[Inter] font-[500] leadint-[24.2px]'>
               {{auth()->user()->name}}
           </h1>
       </div>
   </div>
