<div class='px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]'>
    <div class="max-md:mt-[80px] max-xl:mt-[100px]">
        <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    {{-- Offers Produc  --}}
    <div>
        <div
            class='grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 py-[15px] gap-6'>
            @foreach ($offers as $offer)
                <div class='bg-[#f2f2f2] rounded-[4px] py-[15px] px-[20px] w-full'>
                    <div class='rounded-[4px]'>
                        <img class='w-full' src="{{ $offer->img()[0] }}" alt="Product">
                    </div>

                    <div class='flex justify-between py-[10px] border-b-[1px] border-[#380D3733]'>
                        <div class='flex justify-center items-center gap-[5px]'>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.8334 3.33268H14.1667V2.49935C14.1667 2.27834 14.0789 2.06637 13.9226 1.91009C13.7663 1.75381 13.5544 1.66602 13.3334 1.66602C13.1123 1.66602 12.9004 1.75381 12.7441 1.91009C12.5878 2.06637 12.5 2.27834 12.5 2.49935V3.33268H7.50002V2.49935C7.50002 2.27834 7.41222 2.06637 7.25594 1.91009C7.09966 1.75381 6.8877 1.66602 6.66669 1.66602C6.44567 1.66602 6.23371 1.75381 6.07743 1.91009C5.92115 2.06637 5.83335 2.27834 5.83335 2.49935V3.33268H4.16669C3.50365 3.33268 2.86776 3.59607 2.39892 4.06492C1.93008 4.53376 1.66669 5.16964 1.66669 5.83268V15.8327C1.66669 16.4957 1.93008 17.1316 2.39892 17.6005C2.86776 18.0693 3.50365 18.3327 4.16669 18.3327H15.8334C16.4964 18.3327 17.1323 18.0693 17.6011 17.6005C18.07 17.1316 18.3334 16.4957 18.3334 15.8327V5.83268C18.3334 5.16964 18.07 4.53376 17.6011 4.06492C17.1323 3.59607 16.4964 3.33268 15.8334 3.33268ZM16.6667 15.8327C16.6667 16.0537 16.5789 16.2657 16.4226 16.4219C16.2663 16.5782 16.0544 16.666 15.8334 16.666H4.16669C3.94567 16.666 3.73371 16.5782 3.57743 16.4219C3.42115 16.2657 3.33335 16.0537 3.33335 15.8327V9.99935H16.6667V15.8327ZM16.6667 8.33268H3.33335V5.83268C3.33335 5.61167 3.42115 5.39971 3.57743 5.24343C3.73371 5.08715 3.94567 4.99935 4.16669 4.99935H5.83335V5.83268C5.83335 6.0537 5.92115 6.26566 6.07743 6.42194C6.23371 6.57822 6.44567 6.66602 6.66669 6.66602C6.8877 6.66602 7.09966 6.57822 7.25594 6.42194C7.41222 6.26566 7.50002 6.0537 7.50002 5.83268V4.99935H12.5V5.83268C12.5 6.0537 12.5878 6.26566 12.7441 6.42194C12.9004 6.57822 13.1123 6.66602 13.3334 6.66602C13.5544 6.66602 13.7663 6.57822 13.9226 6.42194C14.0789 6.26566 14.1667 6.0537 14.1667 5.83268V4.99935H15.8334C16.0544 4.99935 16.2663 5.08715 16.4226 5.24343C16.5789 5.39971 16.6667 5.61167 16.6667 5.83268V8.33268Z"
                                        fill="#380D37" />
                                </svg>
                            </div>
                            <div>
                                <p class='text-[#380D37] text-[12px] font-[jost] font-[400]'>
                                    {{ DateTime::createFromFormat('Y-d-m', $offer->ProductOffer->from)->format('d M Y') }}
                                    -
                                    {{ DateTime::createFromFormat('Y-d-m', $offer->ProductOffer->to)->format('d M Y') }}
                                </p>
                            </div>
                        </div>

                        <div class='flex justify-center items-center gap-[5px]'>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                    viewBox="0 0 18 20" fill="none">
                                    <path
                                        d="M15.3 7.50065L15.8 10.0007H4.2L4.7 7.50065H15.3ZM16.6667 3.33398H3.33333V5.00065H16.6667V3.33398ZM16.6667 5.83398H3.33333L2.5 10.0007V11.6673H3.33333V16.6673H11.6667V11.6673H15V16.6673H16.6667V11.6673H17.5V10.0007L16.6667 5.83398ZM5 15.0007V11.6673H10V15.0007H5Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div>
                                <p class='text-[#380D37] text-[12px] font-[jost] font-[400]'>{{$offer->ProductOffer->type}}</p>
                            </div>
                        </div>
                    </div>

                    <div class='text-center leading-[40px]'>
                        <h1 class='text-[#380D37] text-[20px] font-[jost] font-[500'>
                            {{$offer->ProductOffer->title}}
                        </h1>
                        <p class='text-[14px] text-[#380D37] font-[jost] font-[400]'>
                           {{$offer->ProductOffer->des}}
                        </p>
                    </div>

                    <div class='flex justify-center'>
                        <a href="{{route('product.details',[$offer->slug])}}" wire:navigate>
                            <button
                            class='text-[#f2f2f2] text-[14px] font-[jost] font-[500] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[10px] px-[21px] flex items-center'>
                            View Details</button>
                        </a>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="px-24 mt-8">
            {{ $offers->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>
