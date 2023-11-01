<div x-data="{ open: false }">

<div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
      <div class="bg-white rounded-lg">
          <a href="{{route('product.details')}}">
            <img class="object-center"
              src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
              alt="">
            </a>
          <div>
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                  Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                  <a href="#"
                      class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                      @auth
                        <livewire:add-to-cart :id="1" button='<p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left cursor-pointer">Add to Cart</p>'/>
                      @else
                        <a href="javascript:void(0)">
                            <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left cursor-pointer" @click="open = ! open" >Add to Cart</p>
                        </a>
                        
                 
                    
                       @endauth

              </div>
          </div>
      </div>
  </div>
       <!-- ----------cart----- -->
  <div class="w-[400px] h-[792px] gap-20 bg-[#F2F2F2] right-0 top-0 fixed z-[9999]" x-show="open">
                                      <div class="w-[400px] h-[61px] bg-[#380D37] flex justify-between text-[20px] text-[#fff] items-center px-[20px]">
                                      <img class='h-[50px]' src="/storage/product/Cart.svg" alt="">
                                      <h2 class='font-[jost] font-[500] text-[20px] text-[#F2F2F2]'>Close</h2>
                                      </div>
                                      <div class=' w-[364px] mx-auto px-[5px]'>
                                          <div class='flex justify-around mt-[10px] border-t-[#3535354D] border-t-[2px] border-b-[#3535354D] border-b-[2px] py-[10px] px-[5px] gap-[10px]'>
                                              <div class='items-center flex'><img class="w-[80px] h-[px]" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                              alt=""></div>
                                              <div>
                                                  <div>
                                                  <p class='text-[12px] text-[#380D37] font-[jost] font-[500]'>Lenovo IdeaPad15AMN7 </br> AMD Ryzen 5 7520U 8-512 GB,</br> Brand New Cloud grey</p>
                                                  </div>
                                                  <div class='border-[#380D37] w-[85px] h-[19.231px] border-[2px] rounded-[4px] my-[10px] flex items-center justify-around'>
                                                      <span class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center'>-</span>
                                                      <span class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center'>1</span>
                                                      <span class='text-[#380D37] h-[19.231px] pr-[5px] flex items-center'>+</span>
                                                  </div>
                                                  <div>
                                                      <p class='text-[#353535] text-[16px] font-[jost] font-[500]'>1 x <span class='text-[#DC275C]'>1,50,000 TAKA</span></p>
                                                      
                                                  </div>
                                              </div>
                                              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                              </svg>
                                              </div>
                                          </div>
                                      </div>

                                      <div class='items-center mx-auto w-[364px] translate-y-[360px]'>
                                          <div class=' mx-auto h-[1px] px-[20px] bg-[#353535]'></div>
                                          <div class='my-[30px]'>
                                          <ul class='flex justify-between mx-[5px]'>
                                          <li class='text-[20] text-[#353535] font-[jost] font-[700]'>Subtotal :</li>
                                              <li class='text-[20] text-[#DC275C] font-[jost] font-[700]'>1,50,000 TK</li>
                                          </ul>
                                          </div>
                                          <div class='items-center flex justify-center w-[364px] my-[30px]'>
                                              <button class='w-[364px]  border-[1px] border-[#380D37] rounded-[4px] px-[50px] py-[10px] text-[#380D37] text-[20px] font-[jost] font-[500]'>View Cart</button>
                                          </div>
                                          <div class='items-center flex justify-center w-[ 364px] my-[30px]'>        
                                              <button class='w-[364px] rounded-[4px] items-center px-[50px] py-[10px] text-[#F2F2F2] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[20px] font-[jost] font-[500]'>Checkout</button>
                                          </div>
                                      </div>
                                  </div>
                <!-- -----------------cart----end---- -->

</div>