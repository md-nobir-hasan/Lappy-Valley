  <footer
      class="bg-gradient-to-r from-[#380D37] to-[#DC275C] pt-4 text-white mt-20 max-sm:mt-14 max-md:mt-16 max-lg:mt-18 h-[400px] max-sm:h-[100%] max-md:h-[380px] max-lg:h-[390px]">
      <div class="flex justify-evenly max-sm:block max-sm:px-[18px]">

          <div class="">
              <p
                  class="text-[#F2F2F2] font-[jost] max-sm:text-center text-[40px] max-sm:text-[34px] max-md:text-[32px] max-lg:text-[34px] font-[500] max-md:text-center my-3">
                  Address</p>
              <ul
                  class="text-[#F2F2F2] font-[jost] max-sm:text-center text-[16px] max-sm:text-[16px] max-md:text-[12px] max-lg:text-[14px] font-[500] leading-[23px] max-sm:leading-[28px] max-md:leading-[18px] max-lg:leading-[20px] max-md:text-center">
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Address:
                      </span>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Shop # 4A-009A, Block # A, Level #04,
                      </span>
                  </li>
                  <li class="mb-[15px] ">
                      <span class="px-1 hover:bg-blue-700">
                          Jamuna Future Park, Dhaka -1229
                      </span>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Shop # 607(5th Floor),
                      </span>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Rajuk Commercial-Complex,
                      </span>
                  </li>
                  <li class="mb-[15px] ">
                      <span class="px-1 hover:bg-blue-700">
                          Azampur, Uttara, Dhaka-1230
                      </span>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Trade license : 202984t
                      </span>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Bin Number : 0049818790102
                      </span>
                  </li>
              </ul>
          </div>

          <div class='text-left'>
              <p
                  class="text-[#F2F2F2] font-[jost] max-sm:text-center text-[40px] max-sm:text-[34px] max-md:text-[32px] max-lg:text-[34px] font-[500]  my-3">
                  Company</p>
              <ul
                  class="text-[#F2F2F2] font-[jost] max-sm:text-center text-[16px] max-sm:text-[16px] max-md:text-[12px] max-lg:text-[14px] font-[500] leading-[23px] max-sm:leading-[14px] max-md:leading-[12px] max-lg:leading-[15px] max-sm:my-[21px] max-sm:ml-[1px]  ml-[30px]">
                  <li class="mb-[25px] max-sm:mb-[18px] list-disc max-sm:list-none ">
                      <a class="px-1 hover:bg-blue-700 nav-colors" href="{{ route('about_us') }}" id='about-us'>
                          About Us
                      </a>
                  </li>
                  <li class="mb-[25px] max-sm:mb-[18px] list-disc max-sm:list-none">
                      <a class="px-1 hover:bg-blue-700 nav-colors" href="{{ route('tc') }}">
                          Terms & Conditions
                      </a>
                  </li>
                  <li class="mb-[25px] max-sm:mb-[18px] list-disc max-sm:list-none ">
                      <a class="px-1 hover:bg-blue-700 nav-colors" href="{{ route('pp') }}">
                          Privay Policy
                      </a>
                  </li>
                  <li class="mb-[25px] max-sm:mb-[18px] list-disc max-sm:list-none ">
                      <a class="px-1 hover:bg-blue-700 nav-colors" href="{{ route('account') }}">
                          My account
                      </a>
                  </li>
                  <li class="mb-[25px] max-sm:mb-[18px] list-disc max-sm:list-none ">
                      <a class="px-1 hover:bg-blue-700 nav-colors" href="{{ route('rsp') }}">
                          Refund & Service Policy
                      </a>
                  </li>
              </ul>
          </div>

          <div>
              <p
                  class="text-[#F2F2F2] font-[jost] text-[40px] max-sm:text-[34px] max-md:text-[32px] max-lg:text-[34px] font-[500] max-md:text-center my-3">
                  Contact</p>
              <ul
                  class="text-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[16px] max-md:text-[12px] max-lg:text-[14px] font-[500] leading-[23px] max-sm:leading-[28px] max-md:leading-[18px] max-lg:leading-[20px] max-sm:text-center">
                  <li class="mt-[15px] ">
                      <span class="">
                          Phone:
                      </span>
                  </li>
                  <li>
                      <a href="tel:01757773557" class="px-1 hover:bg-blue-700 nav-colors">
                          +8801757773557,
                      </a>
                      <a href="tel:01712644209" class="px-1 hover:bg-blue-700 nav-colors">
                          +8801712644209,
                      </a>
                  </li>
                  <li class="mb-[15px]">
                      <a href="tel:01736361123" class="px-1 hover:bg-blue-700 nav-colors">
                          +8801736361123,
                      </a>
                      <a href="tel:01757773557" class="px-1 hover:bg-blue-700 nav-colors">
                          +8801757773557,
                      </a>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Email:
                      </span>
                  </li>
                  <li class="mb-[15px]">
                      <a href="mailto:{{ $other_setting->email }}" class="px-1 hover:bg-blue-700 nav-colors">
                          {{ $other_setting->email }}
                      </a>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Trade license : 202984
                      </span>
                  </li>
                  <li>
                      <span class="px-1 hover:bg-blue-700">
                          Bin Number : 0049818790102
                      </span>
                  </li>
              </ul>

              <!-- -------social----------icon------------- -->
              <div
                  class="mt-[20px] flex max-sm:justify-center max-sm:items-center gap-4 text-[24px] max-sm:pb-[100px] max-sm:pt-[20px]">
                  <a href="{{ $other_setting->fb }}" title="Facebook" target="_nobir"
                      class="bg-[#f2f2f2] rounded-[100%] hover:bg-blue-400 w-[25.08px] h-[24px] flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="facebook"
                          class="w-[25.08px] h-[24px]">
                          <path class="fill-[#DC275C]" fill-rule="evenodd"
                              d="M12 5.5H9v-2a1 1 0 0 1 1-1h1V0H9a3 3 0 0 0-3 3v2.5H4V8h2v8h3V8h2l1-2.5z"
                              clip-rule="evenodd">
                          </path>
                      </svg>
                  </a>
                  <a href="{{ $other_setting->twitter }}" title="Twitter" target="_nobir"
                      class="hover:bg-blue-400 w-[25.08px] h-[24px] flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-[25.08px] h-[24px] hover:bg-blue-400" x="0px"
                          fill="#F2F2F2" y="0px" viewBox="0 0 50 50">
                          <path
                              d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z">
                          </path>
                      </svg>
                  </a>
                  <a href="javascript:void(0)"
                      class="bg-[#f2f2f2] rounded-[20%] hover:bg-blue-400 w-[25.08px] h-[24px] flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="instagram">
                          <g data-name="Brand Logos">
                              <path fill="#DC275C"
                                  d="M12.00039,6.86511A5.13489,5.13489,0,1,0,17.13528,12,5.13479,5.13479,0,0,0,12.00039,6.86511Zm0,8.46846A3.3336,3.3336,0,1,1,15.334,12,3.33317,3.33317,0,0,1,12.00039,15.33357Z">
                              </path>
                              {{-- <path fill="#DC275C" d="M21.93985,7.87719a7.33258,7.33258,0,0,0-.46447-2.42726,4.918,4.918,0,0,0-1.15346-1.77146A4.89358,4.89358,0,0,0,18.55129,2.525,7.32278,7.32278,0,0,0,16.124,2.06054C15.05775,2.012,14.7169,2,12.00122,2s-3.05681.01126-4.12365.06054A7.33317,7.33317,0,0,0,5.45032,2.525,4.90522,4.90522,0,0,0,3.67886,3.67847a4.88551,4.88551,0,0,0-1.1534,1.77146A7.33341,7.33341,0,0,0,2.061,7.87719C2.01171,8.94341,2.00039,9.28432,2.00039,12s.01132,3.05653.06059,4.12276a7.33352,7.33352,0,0,0,.46448,2.42731,4.888,4.888,0,0,0,1.1534,1.77146,4.9169,4.9169,0,0,0,1.77146,1.1534,7.33849,7.33849,0,0,0,2.42725.46448C8.94441,21.9879,9.28471,22,12.00039,22s3.05658-.01132,4.12281-.06059a7.33339,7.33339,0,0,0,2.42726-.46448,5.11251,5.11251,0,0,0,2.92492-2.92486,7.316,7.316,0,0,0,.46447-2.42731c.0485-1.067.05976-1.40708.05976-4.12276S21.98835,8.94341,21.93985,7.87719Zm-1.799,8.16406a5.54872,5.54872,0,0,1-.344,1.85708,3.31133,3.31133,0,0,1-1.89825,1.89741,5.52231,5.52231,0,0,1-1.85708.344c-1.05408.04844-1.37068.05815-4.04119.05815s-2.98623-.00971-4.04-.05815a5.5263,5.5263,0,0,1-1.85708-.344,3.10771,3.10771,0,0,1-1.15024-.748,3.085,3.085,0,0,1-.748-1.1494,5.52134,5.52134,0,0,1-.344-1.85708c-.0485-1.05408-.05815-1.37068-.05815-4.04119s.01049-2.98623.05815-4.0412a5.56308,5.56308,0,0,1,.344-1.857,3.1074,3.1074,0,0,1,.748-1.15024,3.08175,3.08175,0,0,1,1.15024-.748,5.52271,5.52271,0,0,1,1.85708-.344c1.05407-.04849,1.37068-.05815,4.04-.05815s2.98623.01049,4.04119.05815a5.5635,5.5635,0,0,1,1.85708.344,3.30957,3.30957,0,0,1,1.89825,1.89825,5.52254,5.52254,0,0,1,.344,1.857c.04849,1.055.05815,1.37074.05815,4.0412S20.18936,14.98628,20.14087,16.04125Z"></path> --}}
                              <path fill="#6563ff" d="M17.339,5.462h-.00044a1.19979,1.19979,0,1,0,.00044,0Z"></path>
                          </g>
                      </svg>
                  </a>
                  <a href="{{ $other_setting->youtube }}" title="Youtube" target="_nobir"
                      class="rounded-[20%] hover:bg-blue-400 w-[25.08px] h-[24px] flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                          id="youtube">
                          <path fill="#f2f2f2" d="M443.9,88.2c-58-3.8-148.6-7.2-187.9-7.2s-129.9,3.4-187.9,7.2C38.8,90.2,16,114.5,16,143.9v224.2
                        c0,29.4,22.8,53.7,52.1,55.7c58,3.8,148.6,7.2,187.9,7.2s129.9-3.4,187.9-7.2c29.3-1.9,52.1-26.3,52.1-55.7V143.9
                        C496,114.5,473.2,90.2,443.9,88.2z M212.1,331.2V180.8L342.3,256L212.1,331.2z"></path>
                      </svg>
                  </a>
                  <a href="mailto:{{ $other_setting->email }}" title="E-mail"
                      class="rounded-[20%] hover:bg-blue-400 w-[25.08px] h-[24px] flex justify-center items-center">

                      <svg xmlns="http://www.w3.org/2000/svg" width="25.08" height="24"
                          class="max-sm:w-[25.08px] max-sm:h-[24px] max-md:w-[21px] max-lg:w-[23px] max-md:h-[20px] max-lg:h-[22px]"
                          viewBox="0 0 25 24" fill="#F2F2F2">
                          <path
                              d="M2.00941 5.985C2.00941 8.02227 2.67619 9.49227 3.9897 10.3555C5.0667 11.0645 6.31474 11.1709 6.96414 11.1709C7.12182 11.1709 7.24876 11.1627 7.33695 11.1573C7.33695 11.1573 7.13117 12.5264 8.12533 13.8791H8.07989C6.3575 13.8791 0.73999 14.2459 0.73999 18.9614C0.73999 23.7559 5.89917 24 6.93475 24C7.01626 24 7.06436 23.9973 7.06436 23.9973C7.07505 23.9973 7.14854 24 7.27548 24C7.93959 24 9.65664 23.9155 11.2508 23.1232C13.3192 22.1005 14.3682 20.3155 14.3682 17.8255C14.3682 15.42 12.7701 13.9882 11.6035 12.9409C10.8913 12.3014 10.2753 11.7505 10.2753 11.2145C10.2753 10.6691 10.7256 10.2586 11.2935 9.73909C12.2142 8.90046 13.0827 7.70455 13.0827 5.44364C13.0827 3.45682 12.8302 2.12182 11.2735 1.275C11.4352 1.19045 12.0097 1.12909 12.293 1.08818C13.1362 0.970909 14.3695 0.837273 14.3695 0.135V0H8.22421C8.16274 0.00272727 2.00941 0.234546 2.00941 5.985ZM11.9296 18.2755C12.0472 20.1927 10.4397 21.6068 8.02511 21.7855C5.57313 21.9695 3.55542 20.8432 3.43784 18.9273C3.38038 18.0055 3.77724 17.1055 4.55359 16.3868C5.34062 15.66 6.42163 15.21 7.59751 15.1214C7.73648 15.1132 7.87411 15.105 8.01175 15.105C10.282 15.1064 11.8187 16.4673 11.9296 18.2755ZM10.3248 4.67182C10.9274 6.83727 10.0174 9.09818 8.56628 9.51682C8.39923 9.56432 8.22658 9.58818 8.05317 9.58773C6.72496 9.58773 5.40877 8.21591 4.91971 6.32455C4.64712 5.26636 4.66984 4.33636 4.98252 3.44455C5.28851 2.565 5.84171 1.97455 6.53655 1.77409C6.70358 1.72636 6.87595 1.70182 7.051 1.70182C8.65447 1.70182 9.68604 2.38091 10.3248 4.67182ZM20.7313 9.27273V5.18182H18.0588V9.27273H14.0502V12H18.0588V16.0909H20.7313V12H24.74V9.27273H20.7313Z"
                              fill="#F2F2F2" />
                      </svg>
                  </a>
              </div>
              </ul>
          </div>
      </div>
      <div class="py-[10px] bg-[#9dc209]">
        <h3 class="text-center text-[18px] text-[#f2f2f2]">Developed By Innovative Skills BD</h3>
      </div>
  </footer>
  @assets
      {{-- add to cart functionality by jquery --}}
      <script>
          $(document).ready(function() {
              const sc = $('#side_cart');
              // sc.hide();

              //close side cart
              $(document).on('click', '#side_cart_close', function() {
                  $("#side_cart").hide(300);
              });
              let cart_product_no = $('.cart-product').length - 1;
              //open cart by clicking on add to cart
              // $('.add-to-cart').on('click', function() {
              $(document).on('click', '.add-to-cart', function() {
                  cart_product_no += 1;
                  const p_id = $(this).prop('id');
                  $.ajax({
                      type: "get",
                      url: "{{ route('add_to_cart') }}",
                      data: {
                          pid: p_id
                      },
                      dataType: "json",
                      success: function(response) {
                          if (response.msg) {
                              toastr.error(response.msg);
                          } else {
                              const product = `
                                <div x-data="{
                                        qty: 1,
                                        price:'${response.product.price.replace(/,/g,'')}',
                                        dis_price:'${response.product.final_price.replace(/,/g,'')}',
                                        subtotal:0,
                                        cp_show:true,
                                        setup() {
                                            this.subtotal = Number(this.dis_price) * Number(this.qty);
                                            total = Number(total) + Number(this.subtotal);
                                        },
                                        priceCal(new_qty) {
                                            const new_subtotal = new_qty * Number(this.dis_price);
                                            total = total - Number(this.subtotal) + new_subtotal;
                                            this.subtotal = new_subtotal;
                                        },
                                        mplus() {
                                            if(this.qty>= 5){
                                                toastr.warning('You can not add more then 5 products');
                                                return false;
                                            }
                                            $.ajax({
                                                    url:'{{ route('plus') }}',
                                                    method:'get',
                                                    data:{id:${response.id}},
                                                    success:(res)=>{
                                                        if(res.msg){
                                                            toastr.warning(res.msg)
                                                        }else{
                                                            this.priceCal(++this.qty);
                                                            console.log('Successfully decrease quantity')
                                                        }
                                                    }
                                                });
                                        }, mminus() {
                                            if(this.qty <= 1){
                                                toastr.warning('You can not remove all quantity');
                                                return false;
                                            }
                                            $.ajax({
                                                    url:'{{ route('minus') }}',
                                                    method:'get',
                                                    data:{id:${response.id}},
                                                    success:(res)=>{
                                                        if(res.msg){
                                                            toastr.warning(res.msg)
                                                        }else{
                                                            this.priceCal(--this.qty)
                                                            console.log('Successfully decrease quantity')
                                                        }
                                                    }
                                                });

                                        },removeProd(){
                                            $.ajax({
                                                    url:'{{ route('delete') }}',
                                                    method:'get',
                                                    data:{id:${response.id},mt:'Cart'},
                                                    success:(res)=>{
                                                        if(res.msg){
                                                            toastr.warning(res.msg)
                                                        }else{
                                                            this.priceCal(0)
                                                            this.cp_show = false;
                                                            let cart_count =  Number($('.cart_count:eq(1)').text());
                                                            $('.cart_count').text(cart_count-1);
                                                        }
                                                    }
                                                });
                                        } }" x-init='setup()' x-show='cp_show'
                                    class='cart-product flex justify-around mt-[10px] border-t-[#3535354D] border-t-[2px] border-b-[#3535354D] border-b-[2px] py-[10px] px-[5px] gap-[10px]'>

                                    <input type="hidden" name="cps[${cart_product_no}][product_id]"
                                        value="${response.product_id}">
                                    <input type="hidden" name="cps[${cart_product_no}][qty]"
                                        value="${response.id}">
                                    <div class='flex items-center'>
                                        <img class="w-[80px] h-[px]" src="${response.product.photo ? response.product.photo.split(',')[0] : '/backend/img/thumbnail-default.jpg' }"
                                            alt="${response.product.title}">
                                    </div>

                                    <div>
                                        <div>
                                            <p class='text-[12px] text-[#380D37] font-[jost] font-[500]'>
                                                ${response.product.title}
                                            </p>
                                        </div>
                                        <div
                                            class='border-[#380D37] w-[85px] h-[19.231px] border-[2px] rounded-[4px] my-[10px] flex items-center justify-around'>
                                            <span @click="mminus"
                                                class='cplus text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center cursor-pointer  text-center'>-</span>
                                            <span x-text="qty"
                                            class='text-[#380D37] h-[19.231px] w-[40px] border-[#380D37] border-r-[2px]  flex items-center  justify-center'
                                                >

                                            </span>
                                            <span @click="mplus"
                                                class='cplus text-[#380D37] h-[19.231px] pr-[5px] flex items-center cursor-pointer text-center'>+</span>
                                        </div>
                                        <div>
                                            <p class='text-[#353535] text-[16px] font-[jost] font-[500] text-center'>
                                                <span x-text="qty"></span> x <span class='text-[#DC275C]'> ${response.product.final_price}</span>
                                                TAKA
                                            </p>

                                        </div>
                                    </div>

                                    <div>
                                        <span @click="removeProd" class="cursor-pointer cart_prd_delete">
                                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>`;

                              $('#side_cart_body').append(product);
                              $('#side_cart').show(500);
                              let cart_count = Number($('.cart_count:eq(1)').text());
                              $('.cart_count').text(cart_count + 1);
                          }
                      }
                  });
              })

          })
      </script>
      @isset($pixels)
          {!! $pixels->footer !!}
      @endisset
      @isset($gtags)
          {!! $gtags->footer !!}
      @endisset
  @endassets
