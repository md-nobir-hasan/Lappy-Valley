<div
    class="px-[100px] max-2xl:px-[70px] max-xl:mt-[100px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:mt-[70px] max-sm:px-[15px]">
    <div>
        <h1 class='font-[jost] text-[20px] font-[400] leading-[25.3px] text-[#353535] max-lg:text-[18px]'>
            <a href="{{ route('home') }}"
                wire:navigate>Home</a>/{{ $product->cat_info?->title }}/{{ $product->brand?->title }}/{{ $product->title }}
        </h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>
    <!-- -----------key-Feature -section----- -->
    <div class="mt-[30px] grid grid-cols-2 items-center max-md:grid-cols-1">
        <div>
            @if ($product->photo)
                @php
                    $photos = explode(',', $product->photo);
                    $photo = $photos[0];
                @endphp
            @else
                @php
                    $photo = '/backend/img/thumbnail-default.jpg';
                @endphp
            @endif
            <div
                class="relative mx-auto h-[450px] w-[440px] items-center justify-center overflow-hidden max-lg:w-[340px] max-md:flex max-md:w-full">
                <div class="duration-50 flex w-[432px] items-center justify-center overflow-hidden transition ease-in-out hover:scale-125 max-lg:w-[350px] max-md:w-[432px]"
                    id="imageContainer">
                    <img id="hoverImage"
                        class="duration-50 w-[600] overflow-hidden object-center transition ease-in-out hover:scale-125 max-lg:w-[400px]"
                        src="{{ $photo }}" alt="{{ $product->title }}">
                </div>
                <span
                    class="absolute right-[-5px] top-0 rounded-l-lg bg-[#ef4a23] px-2 py-[2px] text-[14px] text-[#fff]">
                    <span>-{{ $product->discount }}%</span>
                </span>
            </div>


            <div class="flex items-center justify-center max-md:mt-[20px] md:mt-[1px]">
                @foreach ($photos as $pto)
                    <div class="w-[52px] border-[2px] border-[rgba(53_53_53_0.30)] max-sm:border-[1px]">
                        <img class="img-mini object-center" src="{{ $pto }}" alt="{{ $product->title }}">
                    </div>
                @endforeach
                <script>
                    $('.img-mini').each(function(index) {
                        $(this).on('click', function() {
                            $('.img-mini').removeClass('border-2 border-[#380D37]');
                            $(this).addClass('border-2 border-[#380D37]');
                            let src = $(this).attr('src');
                            // console.log(src);
                            // alert(src);
                            $('#hoverImage').attr('src', src);

                        });
                    });
                </script>

            </div>
        </div>
        <div class="text-left max-md:mt-[40px]">
            <div>
                <h1 class="font-[jost] text-[1.14rem] font-[500] text-[#380D37]">
                    {{ $product->title }}
                </h1>
            </div>
            <div class="flex text-center gap-[3px] mt-2">
                @if (count($product_reviews) > 0)
                    @php
                        $star = $product_reviews->avg('rate');
                    @endphp
                    @for ($i = 1; $i <= $star; $i++)
                        <span>
                            <svg viewBox="0 0 24 24" fill="rgb(255, 206, 49)" class="w-[18px] h-[18px]"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                        stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </span>
                    @endfor
                    @for ($i = 1; $i <= 5 - $star; $i++)
                        <span>
                            <svg viewBox="0 0 24 24" fill="white" class="w-[18px] h-[18px]"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                        stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </span>
                    @endfor
                @else
                    <span>
                        <svg viewBox="0 0 24 24" fill="rgb(255, 206, 49)" class="w-[18px] h-[18px]"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                    stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                    <span>
                        <svg viewBox="0 0 24 24" fill="rgb(255, 206, 49)" class="w-[18px] h-[18px]"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                    stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                    <span>
                        <svg viewBox="0 0 24 24" fill="rgb(255, 206, 49)" class="w-[18px] h-[18px]"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                    stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                    <span>
                        <svg viewBox="0 0 24 24" fill="rgb(255, 206, 49)" class="w-[18px] h-[18px]"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                    stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                    <span>
                        <svg viewBox="0 0 24 24" fill="rgb(255, 206, 49)" class="w-[18px] h-[18px]"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                    stroke="rgb(255, 206, 49)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                @endif
                <span class="flex items-center">
                    <a href="#review"
                        class="text-[12px] text-[#000000] hover:text-[#919191] text-center decoration-none duration-200 font-[500] hover:underline">
                        {{ ($toatl_reviews = $product_reviews->count() > 0) ? $toatl_reviews : '1' }} reviews
                    </a>
                </span>
            </div>
            <div class="mt-[5px]">
                <p class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[18px]">Status:<span
                        class="ml-2 ">
                        @if ($product->upcomming)
                            <span class="text-[green] hover:underline">UP COMMING (<span
                                    class="">{{ date('d-m-y', strtotime($product->upcomming)) }}</span>)
                            </span>
                            {{-- <span class="ml-5 badge badge-warning">{{$product->upcomming}}</span> --}}
                        @else
                            @if ($product->stock > 0)
                                <span class="text-[green] hover:underline-offset-3">IN STOCK</span>
                            @else
                                <span class="text-[#DC275C] hover:underline">OUT OF STOCK</span>
                            @endif
                        @endif
                    </span>
                </p>
            </div>
            <div class="bg-gradient-to-r from-[#380D37] to-[#DC275C] w-[110px] mt-[5px]">
                <p class="font-[jost] text-[16px] font-[500] text-[#f2f2f2] max-lg:text-[18px] text-center">Key
                    Features
                </p>
            </div>
            <div class="flex flex-col mt-[5px]">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left">
                                <thead>
                                    <tr class="border border-[black]">
                                        <th scope="col"
                                            class="font-[jost] text-[18px] font-[700] text-[#353535] max-lg:text-[18px] px-4 py-[6px] border border-[black] ">
                                            Attribute
                                        </th>
                                        <th scope="col"
                                            class="font-[jost] text-[18px] font-[500] text-[#353535] max-lg:text-[18px] px-4 py-[6px] border border-[black] ">
                                        </th>
                                        <th scope="col"
                                            class="font-[jost] text-[18px] font-[700] text-[#353535] max-lg:text-[18px] px-4 py-[6px] border border-[black] ">
                                            Value
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Manufacture
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[900] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap items-center text-center">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{ $product->mpn ? $product->mpn : 'N/A' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Model
                                        </td>
                                        <td
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{ $product->model ? $product->model : 'N/A' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Processor
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{$product->mpn ? ($product->mpn. ' '.$product->c_speed ?? '') : 'N/A'}}
                                            {{-- {{ $product->ProcessorModel?->name }} @if ($product->c_speed)
                                                ({{ $product->c_speed }}) @endif --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            RAM
                                        </td>
                                        <td
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{ $product->ram ? $product->ram->capacity : 'N/A' }}GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Storage
                                        </td>
                                        <td
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{ $product->storage() ? $product->storage() : 'N/A' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Display
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{-- {{ $product->DisplaySize ? $product->DisplaySize->size : 'N/A' }} --}}
                                            {{ $product->DisplaySize?->size . ' "' . $product->DisplayType?->name . ' (' . $product->d_resolution }})
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Condition
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{ $product->cat_info ? $product->cat_info->title : 'N/A' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[16px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Regular Price
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            BDT {{ $product->price ? $product->price : 'N/A' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="font-[jost] text-[14px] font-[700] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            Discount
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            <div class="w-2 h-2 bg-black rounded-[100%] mx-auto">
                                            </div>
                                        </td>
                                        <td
                                            class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[14px] px-4 py-[6px] border border-[black] whitespace-nowrap">
                                            {{ $product->discount ? $product->discount.'%' : 'N/A' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    {{-- <ul class="mb-3 mt-4 leading-[29px] max-lg:leading-[26px]">
                <li class="font-[jost] text-[18px] font-[500] text-[#353535] max-lg:text-[18px]">Status:<span
                        class="ml-2 text-[#DC275C]">
                        @if ($product->upcomming)
                            <span class="badge badge-success">UP COMMING (<span
                                    class="badge badge-warning">{{ date('d-m-y', strtotime($product->upcomming)) }}</span>)
                            </span>
                        @else
                            @if ($product->stock > 0)
                                <span class="badge badge-success">IN STOCK</span>
                            @else
                                <span class="badge badge-warning">OUT OF STOCK</span>
                            @endif
                        @endif
                    </span>
                </li>
                <li class="font-[jost] text-[18px] font-[500] text-[#353535] max-lg:text-[18px]">Key Features:
                </li>
                @if ($product->mpn)
                    <li class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px]">
                        Manufacture: {{ $product->mpn }}
                    </li>
                @endif
                @if ($product->model)
                    <li class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px]">
                        Model: {{ $product->model }}
                    </li>
                @endif
                @if ($product->ProcessorModel?->name)
                    <li class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px]">

                        Processor: {{ $product->ProcessorModel?->name }} @if ($product->c_speed)
                            ({{ $product->c_speed }})
                        @endif
                    </li>
                @endif
                <li class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px]">
                    @if ($product->ram?->capacity)
                        RAM: {{ $product->ram?->capacity }} GB,
                    @endif

                    @if ($product->storage())
                        Storage: {{ $product->storage() }}
                    @endif
                </li>
                <li class="font-[jost] text-[16px] font-[400] text-[rgb(53,53,53)] max-lg:text-[14px]">
                    Display:
                    {{ $product->DisplaySize?->size . '" ' . $product->DisplayType?->name . ' (' . $product->d_resolution }})
                </li>
                @if ($product->cat_info)
                    <li class="font-[jost] text-[16px] font-[400] text-[rgb(53,53,53)] max-lg:text-[14px]">
                        Condition:
                        {{ $product->cat_info?->title }}
                    </li>
                @endif

                <li class="mt-[10px] font-[jost] text-[18px] font-[500] text-[#353535] max-lg:text-[18px]">
                    Regular Price:</li>
                <li class="font-[jost] text-[18px] font-[700] text-[#DC275C] line-through max-lg:text-[18px]">
                    <span>{{ $product->price }}</span> TK
                </li>
                @if ($product->discount)
                    <li class="mt-[10px] font-[jost] text-[18px] font-[500] text-[#353535] max-lg:text-[18px]">
                        Discount:
                    </li>
                    <li class="font-[jost] text-[18px] font-[700] text-[#DC275C] max-lg:text-[18px]">
                        {{ $product->discount }}%
                    </li>
                @endif
                <li class="mt-[10px] font-[jost] text-[18px] font-[500] text-[#353535] max-lg:text-[18px]">
                    Discounted Price:
                </li>
                <li class="font-[jost] text-[18px] font-[700] text-[#DC275C] max-lg:text-[18px]">
                    {{ $product->final_price }} TK
                </li>
            </ul> --}}
                    <div>
                        <div class="mt-[8px]">
                            <h1 class="font-[jost] text-[18px] font-[600] text-[#353535] max-lg:text-[18px]">
                                Payment Options
                            </h1>
                        </div>
                        <div class="my-[10px] grid w-full grid-cols-2 gap-4 max-xl:grid-cols-1">
                            {{-- buying option without installment --}}
                            <label class="flex w-full gap-4 border-[2px] border-[#380D37] hover:border-[#380D37]"
                                id="cash-payment">
                                <div class="flex justify-center bg-[#f2f2f2] px-3">
                                    <input type="radio" name="payment_process" checked value="one_time"
                                        wire:model="payment_process" class="w-[18px] accent-[#380D37]">
                                </div>
                                <div class="flex flex-col py-3">
                                    <span
                                        class="font-[jost] text-[18px] font-[700] text-[#353535] max-lg:text-[18px]">{{ $product->final_price }}৳</span>
                                    <span
                                        class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[12px]">Cash
                                        Discount Price</span>
                                    <span
                                        class="font-[jost] text-[14px] font-[400] text-[#353535] max-lg:text-[12px]">Online
                                        /
                                        Cash Payment</span>
                                </div>
                            </label>

                            {{-- buying option  with installment --}}
                            {{-- Installment duration calculation  --}}
                            @php
                                $month = 0;
                            @endphp
                            @if ($ins = $product->installment)
                                @if ($ins->duration->year)
                                    @php
                                        $month += $ins->duration->year * 12;
                                    @endphp
                                @endif
                                @if ($ins->duration->month)
                                    @php
                                        $month += $ins->duration->month;
                                    @endphp
                                @endif
                            @endif
                            @if ($month)
                                <label class="flex w-full gap-4 border-[2px] border-[#764A8733] hover:border-[#380D37]"
                                    id='monthly-payment'>
                                    <div class="flex justify-center bg-[#f2f2f2] px-3">
                                        <input type="radio" name="payment_process" value="installment"
                                            wire:model="payment_process" class="w-[20px] accent-[#380D37]">
                                    </div>
                                    <div class="flex cursor-pointer flex-col py-3">
                                        <span>
                                            <span
                                                class="font-[jost] text-[20px] font-[700] text-[#353535] max-lg:text-[18px]">{{ App\Http\Helper::commaRemove($product->price) / $month, 2 }}৳/month
                                            </span>
                                            <span>({{ $month }} months)</span>
                                        </span>
                                        <span
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px]">Regular
                                            Price: {{ $product->price }}৳ </span>
                                        <span
                                            class="font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px]">0%
                                            EMI
                                            for up to 6 Months***</span>
                                    </div>

                                </label>
                            @endif
                        </div>
                        <div class="flex gap-[30px] max-sm:gap-[12px] mt-[8px]">
                            @if ($product->stock > 0)
                                <button wire:click='checkout("{{ $product->slug }}")'
                                    class="fill-up-btn mt-auto rounded-[5px] bg-gradient-to-r from-[#380D37] to-[#DC275C] px-[35px] py-[12px] font-[jost] text-[18px] font-[600] text-[#f2f2f2] max-lg:px-[30px] max-sm:px-[20px] max-lg:py-[12px] max-sm:my-[12px] max-lg:text-[18px] max-sm:text-[16px]">
                                    BUY NOW
                                </button>
                                <button id="{{ $product->id }}"
                                    class="add-to-cart fill-up-btn mt-auto rounded-[5px] bg-gradient-to-r from-[#380D37] to-[#DC275C] px-[35px] py-[12px] font-[jost] text-[18px] font-[600] text-[#f2f2f2] max-lg:px-[30px] max-sm:px-[20px] max-lg:py-[12px] max-sm:my-[12px] max-lg:text-[18px] max-md:px-[30px] max-sm:text-[16px]">
                                    Add To Cart</button>
                            @else
                                {{-- Mora buttons  --}}
                                <a>
                                    <button disabled
                                        class="mt-auto cursor-not-allowed rounded-[5px] bg-[#b6b5b5] px-[40px] py-[12px] font-[jost] text-[18px] font-[600] text-[#f2f2f2] max-lg:px-[30px] max-sm:px-[20px] max-lg:py-[12px] max-sm:my-[12px] max-lg:text-[18px] max-sm:text-[16px] max-md:px-[30px]">
                                        BUY NOW</button>
                                </a>
                                <button disabled
                                    class="mt-auto cursor-not-allowed rounded-[5px] bg-[#b6b5b5] px-[40px] py-[12px] font-[jost] text-[18px] font-[600] text-[#f2f2f2] max-lg:px-[30px] max-sm:px-[20px] max-lg:py-[12px] max-sm:my-[12px] max-lg:text-[18px] max-sm:text-[16px]">
                                    Add To Cart</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- -------------ideapad---section---end--- -->
        <div class="my-[50px] h-[2px] bg-[#380D37] max-sm:my-[30px] max-sm:h-[1px]"></div>

        <!-- -----------------description------ -->
        <div class="my-[15px]">
            <div class="flex gap-[20px] max-sm:gap-[5px]">
                <a href="#specification" data-te-smooth-scroll-init data-te-offset="25"
                    class="spf_btn flex h-[50px] items-center justify-center rounded-[5px] bg-[#380D37] px-6 py-[14px] text-center font-[jost] text-[20px] font-[700] text-[#f2f2f2] max-lg:text-[18px] max-md:h-full max-md:w-full max-sm:px-3 max-sm:py-[10px] max-sm:text-[12px] md:w-[168px]">
                    Specifications</a>
                <a href="#description" data-te-smooth-scroll-init data-te-offset="25"
                    class="dst_btn flex h-[50px] w-[168px] items-center justify-center rounded-[5px] bg-[#f2f2f2] px-6 py-[14px] text-center font-[jost] text-[20px] font-[700] text-[#380D37] max-lg:text-[18px] max-md:h-full max-md:w-full max-sm:px-3 max-sm:py-[10px] max-sm:text-[12px]">
                    Description</a>
                <a href='#review' data-te-smooth-scroll-init data-te-offset="25"
                    class="rev_btn flex h-[50px] w-[168px] items-center justify-center rounded-[5px] bg-[#f2f2f2] px-8 py-[14px] text-center font-[jost] text-[20px] font-[700] text-[#380D37] max-lg:text-[18px] max-md:h-full max-md:w-full max-sm:px-4 max-sm:py-[10px] max-sm:text-[12px]"
                    data-area="ask-question">Review</a>
            </div>
        </div>
        <!-- -----table--section---start----- -->
        <div class="grid grid-cols-4 gap-10 max-lg:grid-cols-1 max-lg:gap-0">
            <div class="col-span-3">
                <section
                    class="max-lg-[12px] rounded-[5px] border-[2px] border-[#380D37] p-[20px] max-md:p-[8px] max-sm:border-[1px] max-sm:p-[5px]"
                    id="specification">
                    {{-- <div class="font-[jost] text-[20px] font-[500] text-[#353535] max-lg:text-[18px]">
                        <h2>Specification</h2>
                    </div> --}}
                    <table class="w-full">
                        {{-- Processore Attributes  --}}
                        <tbody class="mb-[30px] ml-[20px]">
                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">
                                    Processor:
                                </td>
                            </tr>


                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Processor Brand:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->p_brand ? $product->p_brand : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Generation:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->ProcessorGeneration ? $product->ProcessorGeneration->name : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Processor Type:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->ProcessorModel ? $product->ProcessorModel->name : 'N/A' }}</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:w-[180px] max-sm:py-[10px]">
                                    Processor Frequency:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->c_speed ? $product->c_speed : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Processor Core:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->p_core ? $product->p_core : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Processor Thread:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->p_thread ? $product->p_thread : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="translate-y-[-30px] py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    CPU Cache:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] leading-[30px] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    <li class="list-none">L1 Cache:
                                        {{ $product->l1_cache ? $product->l1_cache : 'N/A' }}
                                    </li>
                                    <li class="list-none">L2 Cache:
                                        {{ $product->l2_cache ? $product->l2_cache : 'N/A' }}
                                    </li>
                                    <li class="list-none">L3 Cache:
                                        {{ $product->l3_cache ? $product->l3_cache : 'N/A' }}
                                    </li>
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->p_other ? $product->p_other : 'N/A' }}</td>
                            </tr>


                            <!-- ----------2nd --part (Display attributes)----- -->

                            <tr>
                                <td class="mt-[10px] rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Display Features:</td>
                            </tr>


                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Display Size:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->DisplaySize ? $product->DisplaySize->size : 'N/A' }}"</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Display Type:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->DisplayType ? $product->DisplayType->name : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Display Resolution:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->d_resolution ? $product->d_resolution : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Touch Screen:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->touch_screen ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:translate-y-[-16px] max-sm:py-[10px]">
                                    Display Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->d_other ? $product->d_other : 'N/A' }}</td>
                            </tr>


                            {{-- (Memory Attributes ) --}}
                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Memory:</td>
                            </tr>


                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    RAM:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->ram ? $product->ram->capacity : 'N/A' }}GB
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    RAM Type:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->m_type ? $product->m_type : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Removable:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->m_removal ? 'Yes' : 'No' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    BUS Speed:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->bus_speed ? $product->bus_speed : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Total RAM Slot:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->m_slot ? $product->m_slot : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->m_other ? $product->m_other : 'N/A' }}</td>
                            </tr>


                            <!-- --------------4th---part------------------ -->

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">
                                    Storage:
                                </td>
                            </tr>


                            <tr class="border-b-[2px] border-[#764A8733]">

                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Storage Type:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{-- {{ $s_type_n }} --}}
                                    {{ $product->ssd ? 'SSD' : '' }}{{ $product->hdd ? ', HDD ' : '' }}
                                    {{-- {{$product->ssd ? $cpt = $product->ssd->name : ''}} {{$product->hdd ? $cpt = $product->hdd->name : ''}} --}}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Storage Capacity:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{-- {{ $storage->name }} --}}
                                    {{ $product->ssd ? $product->ssd->name : '' }}{{ $product->hdd ? ', ' . $product->hdd->name : '' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Extra M.2 Slot:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->s_extra_m2_slot ? 'Yes' : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Supported Storage Type:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->s_support_type ? $product->s_support_type : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Storage Upgrade:
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->s_upgrade ? $product->s_upgrade : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->stor_other ? $product->stor_other : 'N/A' }}</td>
                            </tr>


                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Graphics:</td>
                            </tr>


                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Graphics Model:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->g_model ? $product->g_model : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Graphics Memory:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->Graphic ? $product->Graphic->name : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->g_other ? $product->g_other : 'N/A' }}</td>
                            </tr>

                            <!-- -------------------6th--part------------ -->

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Keyboard:</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Keyboard Type:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->k_type ? $product->k_type : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Backlight:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->k_backlight ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->k_other ? $product->k_other : 'N/A' }}</td>
                            </tr>

                            <!-- ----------7th--part------------- -->

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Camera & Audio:</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    WebCam:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->webcam ? $product->webcam : 'No' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Microphone:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->microphone ? $product->microphone : 'No' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Speaker:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->speaker ? $product->speaker : 'No' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->ca_other ? $product->ca_other : 'N/A' }}</td>
                            </tr>

                            <!-- -----------8th---part (Ports & Slots) ----- -->
                            {{--
                        <tr>
                            <td class="bg-[#380D37] text-[#f2f2f2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Ports & Slots:</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px]">
                                Optical Drive:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[500]">
                                {{ $product->optical_drive ?? 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px]">
                                Card Reader:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[500]">
                                {{ $product->card_reader ?? 'No' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px]">
                                HDMI Port:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[500]">
                                {{ $product->hdmi_p ?? 'No' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px]">
                                USB 2 Port:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[500]">
                                {{ $product->usb2_p ?? 'No' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px]">
                                USB 3 Port:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[500]">
                                {{ $product->usb3_p ?? 'No' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px] max-sm:translate-y-[-2px] leading-[20px]">
                                USB
                                Type-C /<br />
                                Thunderbolt Port:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] font-[500]">
                                {{ $product->type_c_tb_p ?? 'No' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] max-sm:translate-y-[-2px] pl-[20px] leading-[20px]">
                                Headphone &<br /> Microphone
                                Port:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] font-[500]">
                                {{ $product->headphone_p }}/
                                {{ $product->microphone_p }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[14px] max-sm:py-[10px] font-[500]">
                                {{ $product->ps_other }}</td>
                        </tr> --}}

                            <!-- ---------------9th--part (Network & Connectivity) ------ -->

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Network & Connectivity:</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    WiFi:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->wifi ? $product->wifi : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Bluetooth:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->bluetooth ? $product->bluetooth : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->nc_other ? $product->nc_other : 'N/A' }}</td>
                            </tr>

                            <!-- ---------------10th---part---------- -->

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Security:</td>
                            </tr>


                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Fingerprint Sensor:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->finger_print ? $product->finger_print : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Facelock:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->facelock ? $product->facelock : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->s_other ? $product->s_other : 'N/A' }}</td>
                            </tr>


                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Software:</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Operating System:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->operating_system ? $product->operating_system : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->soft_other ? $product->soft_other : 'N/A' }}</td>
                            </tr>


                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Power:</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Battery Type:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->battery_type ? $product->battery_type : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Battery Capacity:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->battery_capacity ? $product->battery_capacity : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Adapter Type:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->adapter_type ? $product->adapter_type : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->power_other ? $product->power_other : 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Physical Specification:</td>
                            </tr>

                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Color:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->color ? $product->color : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Dimensions:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->dimension ? $product->dimension : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Weight:</td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->weight ? $product->weight : 'N/A' }}</td>
                            </tr>
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Features:
                                </td>
                                <td
                                    class="py-[14px] font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    {{ $product->physi_other ? $product->physi_other : 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td class="rounded-[5px] bg-[#380D37] py-[10px] pl-[14px] font-[jost] font-[500] text-[#f2f2f2] max-sm:text-[16px]"
                                    colspan="3">Warranty :</td>
                            </tr>
                            {{-- <tr class="border-b-[2px] border-[#764A8733]">
                            <td
                                class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                Warranty Year
                            </td>
                            <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                @if ($product->cat_info->slug == 'brand-new')
                                    1 Year
                                @else
                                    3 Months
                                @endif
                            </td>
                        </tr> --}}
                            {{-- @if ($product->replacement_warranty) --}}
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Replacement Details
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->replacement_warranty ? $product->replacement_warranty : 'N/A' }}
                                </td>
                            </tr>
                            {{-- @endif --}}
                            {{-- @if ($product->motherboard_warranty) --}}
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Motherboard Warranty
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->motherboard_warranty ? $product->motherboard_warranty : 'N/A' }}
                                </td>
                            </tr>
                            {{-- @endif --}}

                            {{-- @if ($product->service_warranty) --}}
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Service Warranty
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->service_warranty ? $product->service_warranty : 'N/A' }}
                                </td>
                            </tr>
                            {{-- @endif --}}
                            {{-- @if ($product->service_warranty) --}}
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] text-[red] pl-[20px] font-[jost] text-[16px] font-[400] max-lg:text-[14px] max-sm:py-[10px]">
                                    Disclaimer
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->disclaimer ? $product->disclaimer : 'N/A' }}
                                </td>
                            </tr>
                            {{-- @endif --}}
                            {{-- @if ($product->service_warranty) --}}
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Note
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->note ? $product->note : 'N/A' }}
                                </td>
                            </tr>
                            {{-- @endif --}}
                            {{-- @if ($product->w_details) --}}
                            <tr class="border-b-[2px] border-[#764A8733]">
                                <td
                                    class="py-[14px] pl-[20px] font-[jost] text-[16px] font-[400] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                                    Other Warranty
                                </td>
                                <td class="font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                                    {{ $product->w_details ? $product->w_details : 'N/A' }}
                                </td>
                            </tr>
                            {{-- @endif --}}
                        </tbody>
                    </table>
                </section>
                <section
                    class="mt-[20px] rounded-[5px] border-[2px] border-[#380D37] py-[20px] pl-[20px] pr-[40px] max-sm:border-[1px]"
                    id="description">
                    <div>
                        <h2
                            class="font-[jost] text-[20px] font-[700] text-[#353535] max-lg:text-[18px] max-sm:text-[16px]">
                            Description</h2>
                    </div>
                    <div class="mb-[40px] mt-[20px]">
                        <h2
                            class="my-[20px] text-justify font-[jost] text-[18px] font-[500] text-[#353535] max-sm:text-[16px]">
                            {{ $product->title }}</h2>
                        <p class="text-justify font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px]">
                            {!! $product->description !!}
                        </p>
                    </div>
                    <div itemprop="description">
                        <h2
                            class="text-justify font-[jost] text-[20px] font-[500] text-[#353535] max-lg:text-[18px] max-sm:text-[16px]">
                            {{ $product->title }} from the best Computer Shop in BD</h2>
                        <p
                            class="py-[14px] text-justify font-[jost] text-[16px] font-[500] text-[#353535] max-lg:text-[14px] max-sm:py-[10px]">
                            {!! $product->summary !!}
                        </p>
                    </div>
                </section>
                <section
                    class="mt-[20px] scroll-mt-5 rounded-[5px] border-[2px] border-[#380D37] p-[20px] max-sm:border-[1px]"
                    id='review'>
                    <div class="flex items-center justify-between gap-[5px]">
                        <div class="">
                            <div class="title-n-action">
                                <h2 class="my-[10px] font-[jost] font-[500] max-sm:text-[16px]">
                                    Reviews({{ $product_reviews->count() }})</h2>
                            </div>
                            <div>
                                <p class="my-[10px] font-[jost] font-[500]">Get Specific Details about this product
                                    from
                                    customers who own it.</p>
                            </div>
                        </div>
                        <div class="">
                            <button type="button"
                                class="fill-up-btn inline-block w-[130px] rounded bg-gradient-to-r from-[#380D37] to-[#DC275C] px-2 pb-2 pt-2.5 font-[jost] text-[16px] font-[500] text-[#f2f2f2] max-lg:text-[14px] max-sm:w-[100px] max-sm:px-[10px] max-sm:text-[11px]"
                                data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable"
                                data-te-ripple-init data-te-ripple-color="light">
                                Write a review
                            </button>


                            <!--Verically centered scrollable modal-->
                            <div data-te-modal-init
                                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="exampleModalCenteredScrollable" tabindex="-1"
                                aria-labelledby="exampleModalCenteredScrollableLabel" aria-modal="true"
                                role="dialog">
                                <div data-te-modal-dialog-ref
                                    class="pointer-events-none relative top-[20px] flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                                    <div
                                        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-[#FFFFFF] bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                        <div
                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                            <!--Modal title-->
                                            <h5 class="leading-norma font-[jost] text-xl font-medium"
                                                id="exampleModalCenteredScrollableLabel">
                                                Review
                                            </h5>
                                            @php
                                                $token = csrf_token();
                                            @endphp
                                            <!--Close button-->
                                            <button type="button" id="modal_close"
                                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                        <!--Modal body-->
                                        <div class="relative p-4">
                                            <div x-data="{
                                                f_name: null,
                                                l_name: null,
                                                img: [],
                                                msg: null,
                                                previews: [],
                                                loading: false,
                                                review_stars: [],
                                                yellow_star: [1, 2, 3, 4, 5],
                                                white_star: [],
                                                v_msg: '',
                                                submit() {
                                                    this.loading = true
                                                    if (!this.f_name) {
                                                        this.v_msg = 'Please, give your first name';
                                                        this.loading = false
                                                        return false;
                                                    }
                                                    if (!this.msg) {
                                                        this.v_msg = 'Please, write something';
                                                        this.loading = false
                                                        return false;
                                                    }
                                                    if (this.review_stars.length < 1) {
                                                        this.review_stars.push(5);
                                                    }
                                                    console.log(this.review_stars)
                                                    const formData = new FormData();
                                                    formData.append('f_name', this.f_name);
                                                    formData.append('l_name', this.l_name);
                                                    formData.append('msg', this.msg);
                                                    for (const im of this.img) {
                                                        formData.append('imgs[]', im);
                                                    }
                                                    formData.append('review_stars', this.review_stars);
                                                    formData.append('product_id', '{{ $product->id }}');
                                                    formData.append('_token', '{{ csrf_token() }}');
                                                    fetch('{{ route('product_review') }}', {
                                                        method: 'POST',
                                                        body: formData
                                                    }).then(response => {
                                                        if (response.ok) {
                                                            this.loading = false
                                                            $('#modal_close').click();
                                                            toastr.success('Review post request send successfully!')
                                                            this.l_name = null
                                                            this.f_name = null
                                                            this.msg = null
                                                            this.img = []
                                                            this.previews = []
                                                            this.review_stars.push(5);
                                                        } else {
                                                            toastr.error('Error uploading file!')
                                                        }
                                                    }).catch(error => {
                                                        console.error(error)
                                                    })

                                                },
                                                fileHandle(event) {
                                                    for (const file of event.target.files) {
                                                        const reader = new FileReader()
                                                        reader.onload = (e) => { this.previews.push(e.target.result) }
                                                        reader.readAsDataURL(file)
                                                        this.img.push(file)
                                                    }

                                                },
                                                stared(star) {
                                                    console.log(star);
                                                    if (star == 1) {
                                                        this.yellow_star = [1];
                                                        this.white_star = [2, 3, 4, 5];
                                                    }
                                                    if (star == 2) {
                                                        this.yellow_star = [1, 2];
                                                        this.white_star = [3, 4, 5];
                                                    }
                                                    if (star == 3) {
                                                        this.yellow_star = [1, 2, 3];
                                                        this.white_star = [4, 5];
                                                    }
                                                    if (star == 4) {
                                                        this.yellow_star = [1, 2, 3, 4];
                                                        this.white_star = [5];
                                                    }
                                                    if (star == 5) {
                                                        this.yellow_star = [1, 2, 3, 4, 5];
                                                        this.white_star = [];
                                                    }
                                                }
                                            }">
                                                <form enctype="multipart/form-data" id="file_upload">
                                                    @csrf
                                                    <div class="my-[10px] flex justify-between gap-[10px]">
                                                        <input x-model='f_name' type="text"
                                                            placeholder="First Name"
                                                            class="relative m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#f2f2f2] p-[10px] font-[jost] text-[12px] font-[400] italic text-[#000000]" />
                                                        @error('f_name')
                                                            <span
                                                                class="text-[12px] text-[red]">{{ $message }}</span>
                                                        @enderror
                                                        <input x-model='l_name' type="text"
                                                            placeholder="Last Name"
                                                            class="relative m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#f2f2f2] p-[10px] font-[jost] text-[12px] font-[400] italic text-[#000000]" />
                                                        @error('l_name')
                                                            <span
                                                                class="text-[12px] text-[red]">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mt-[20px]">
                                                        <textarea x-model='msg' placeholder="Write your review here..."
                                                            class="relative m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#f2f2f2] pb-[100px] pl-[10px] pt-[10px] font-[jost] text-[12px] font-[400] italic text-[#000000]"
                                                            id="message-text"></textarea>
                                                        @error('msg')
                                                            <span
                                                                class="text-[12px] text-[red]">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <br /><br />
                                                    <div class="mb-3">
                                                        <input x-ref="fileInput" type="file" multiple
                                                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-[jost] text-[#380D37] transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-[#380D37] file:px-3 file:py-[0.32rem] file:text-[#f2f2f2] file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 hover:file:text-[#380D37] focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                                            @change="fileHandle($event)">
                                                        <div class="flex">
                                                            <template x-for="preview in previews">
                                                                <img :src="preview" alt="preview"
                                                                    class="max-h-20">
                                                            </template>
                                                        </div>
                                                        @error('img')
                                                            <span
                                                                class="text-[12px] text-[red]">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class='my-[50px] flex items-center justify-between'>
                                                        <div class='items-center'>
                                                            <div>
                                                                <h1
                                                                    class='font-[jost] text-[24px] font-[500] leading-[34.68px] text-[#380D37]'>
                                                                    Reviews</h1>
                                                            </div>
                                                            <div class='my-[10px] flex items-center'>

                                                                <template x-for='yi in yellow_star'
                                                                    :key='yi'>
                                                                    <label :for="'star' + yi" @click='stared(yi)'>
                                                                        <img src="/storage/product/star2.svg"
                                                                            alt="Product" class='h-[37.45px]'>
                                                                        <input type="checkbox" class="hidden"
                                                                            :value='yi'
                                                                            :id="'star' + yi"
                                                                            x-model='review_stars'>
                                                                    </label>
                                                                </template>

                                                                <template x-for='i in white_star'
                                                                    :key='i'>
                                                                    <label :for="'star' + i" @click='stared(i)'>
                                                                        <img src="/storage/product/star-white.svg"
                                                                            alt="Product" class='h-[37.45px]'>
                                                                        <input type="checkbox" class="hidden"
                                                                            :value='i'
                                                                            :id="'star' + i"
                                                                            x-model='review_stars'>
                                                                    </label>
                                                                </template>

                                                                @error('review_stars')
                                                                    <span
                                                                        class="text-[12px] text-[red]">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class='mt-[20px] text-right'>
                                                            <div class="">
                                                                <template x-if='v_msg'>
                                                                    <span x-text='v_msg' class="text-[red]"></span>
                                                                </template>
                                                                <button type="button" @click='submit'
                                                                    class='fill-up-btn relative items-center rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C] px-[25px] py-[12px] font-[jost] text-[16px] font-[500] leading-[28.9px] text-[#f2f2f2] max-lg:text-[14px] max-sm:px-[15px] max-sm:py-[8px]'>
                                                                    <span>Post your review</span>
                                                                    <div x-show='loading'
                                                                        class="absolute top-4 mr-2 inline-block h-6 w-6 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                                                        role="status">
                                                                        <span
                                                                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                                                                        </span>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-[10px] flex items-center gap-[10px]">
                        @for ($i = 1; $i < 6; $i++)
                            @if ($i <= $product->average_rating)
                                <img class="h-7" src="/storage/product/star2.svg" alt="">
                            @else
                                <img class="h-7" src="/storage/product/star-white.svg" alt="">
                            @endif
                        @endfor

                        <div class="mt-[5px] items-center">
                            <span
                                class="mt-[5px] font-[jost] font-[500] max-sm:text-[16px]">{{ $product->average_rating }}
                                out of 5
                            </span>
                        </div>
                    </div>
                    <div class="h-[2px] bg-[#764A8733] max-sm:my-[30px] max-sm:h-[1px]"></div>
                    {{-- Product Review --}}
                    @foreach ($product_reviews as $pr)
                        <div class="mt-[10px]">
                            <div class="my-[10px] flex">
                                @for ($i = 1; $i < 6; $i++)
                                    @if ($i <= $pr->rate)
                                        <img class="h-7" src="/storage/product/star2.svg" alt="">
                                    @else
                                        <img class="h-7" src="/storage/product/star-white.svg" alt="">
                                    @endif
                                @endfor
                            </div>
                            <div>
                                <span class="font[600] mb-[15px] font-[jost]">{{ $pr->review }}</span>
                            </div>
                            <div>
                                <span class="font[600] font-[jost]">By {{ $pr->f_name . ' ' . $pr->l_name }} on
                                    {{ $pr->created_at->format('d-m-Y') }}</span>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
            <div class="max-lg:mt-[15px]">
                @if ($related_products)
                    <div class="rounded-[3px] border-[2px] border-[#380D37] p-[10px] max-sm:border-[1px]">
                        <div class="p-[10px]">
                            <h1
                                class="flex justify-center font-[jost] text-[20px] font-[500] text-[#380D37] max-lg:text-[18px]">
                                Related Products</h1>
                            <div class="h-[2px] bg-[#380D37] max-sm:my-[30px] max-sm:h-[1px]"></div>
                        </div>
                        @foreach ($related_products as $rp)
                            <div class="grid grid-cols-4 gap-[5px] leading-[20.23px]">
                                <div class="col-span-1">
                                    <a class="image-container" href="{{ route('product.details', [$rp->slug]) }}">
                                        <img class="object-center" src="{{ $rp->img()[0] }}" alt="Product">
                                    </a>
                                </div>
                                <div class="col-span-3">
                                    <a href="{{ route('product.details', [$rp->slug]) }}">
                                        <p
                                            class="font-[jost] text-[14px] font-[400] text-[#000000] decoration-[#ef4a23] decoration-1 transition duration-150 ease-in-out hover:text-[#ef4a23] hover:underline hover:underline-offset-4">
                                            {{ $rp->title }}
                                        </p>
                                    </a>
                                    <p
                                        class="my-[10px] font-[jost] text-[16px] font-[700] text-[#DC275C] max-lg:text-[14px]">
                                        <a>
                                            <span>{{ $rp->price }}</span>
                                            ৳
                                        </a>
                                    </p>
                                </div>
                            </div>
                            @if (!$loop->last)
                                <div class="p-[10px]">
                                    <div class="h-[2px] bg-[#764A8733] max-sm:my-[30px] max-sm:h-[1px]"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.spf_btn').on('click', function() {
                    $(this).addClass('bg-[#380D37] text-[#f2f2f2]');
                    $(this).removeClass('bg-[#f2f2f2] text-[#380D37]');
                    $('.dst_btn').removeClass('bg-[#380D37] text-[#f2f2f2]')
                    $('.dst_btn').addClass('bg-[#f2f2f2] text-[#380D37]');
                    $('.rev_btn').removeClass('bg-[#380D37] text-[#f2f2f2]')
                    $('.rev_btn').addClass('bg-[#f2f2f2] text-[#380D37]');
                });
                $('.dst_btn').on('click', function() {
                    $(this).addClass('bg-[#380D37] text-[#f2f2f2]');
                    $(this).removeClass('bg-[#f2f2f2] text-[#380D37]');
                    $('.spf_btn').removeClass('bg-[#380D37] text-[#f2f2f2]')
                    $('.spf_btn').addClass('bg-[#f2f2f2] text-[#380D37]');
                    $('.rev_btn').removeClass('bg-[#380D37] text-[#f2f2f2]')
                    $('.rev_btn').addClass('bg-[#f2f2f2] text-[#380D37]');
                });
                $('.rev_btn').on('click', function() {
                    $(this).addClass('bg-[#380D37] text-[#f2f2f2]');
                    $(this).removeClass('bg-[#f2f2f2] text-[#380D37]');
                    $('.spf_btn').removeClass('bg-[#380D37] text-[#f2f2f2]');
                    $('.spf_btn').addClass('bg-[#f2f2f2] text-[#380D37]');
                    $('.dst_btn').removeClass('bg-[#380D37] text-[#f2f2f2]');
                    $('.dst_btn').addClass('bg-[#f2f2f2] text-[#380D37]');
                });

                //Scroll behavior
                $('html body').animate({

                })
            })
            // --------------------large--size--img--cursor --effect--------------
            const imageContainer = document.getElementById('imageContainer');
            const hoverImage = document.getElementById('hoverImage');

            imageContainer.addEventListener('mousemove', (e) => {
                const {
                    offsetX,
                    offsetY
                } = e;
                const {
                    width,
                    height
                } = imageContainer.getBoundingClientRect();
                const xPercentage = (offsetX / width - 0.5) * 5; // Normalize to -1 to 1
                const yPercentage = (offsetY / height - 0.5) * 5; // Normalize to -1 to 1

                const moveX = -xPercentage * 50; // Adjust the multiplier as needed
                const moveY = -yPercentage * 50; // Adjust the multiplier as needed

                hoverImage.style.transform = `translate(${moveX}px, ${moveY}px)`;
                imageContainer.addEventListener('mouseleave', () => {
                    hoverImage.style.transform = 'translate(0, 0)';
                });

            });




            // --------------------instalment-------------------
            $("#cash-payment").click(function() {
                $(this).addClass("border-[#380D37]");
                $(this).removeClass("border-[#764A8733]");
                $("#monthly-paymetn").removeClass("border-[#380D37]");
            })
            $("#monthly-payment").click(function() {
                $(this).addClass("border-[#380D37]");
                $("#cash-payment").removeClass("border-[#380D37]");
                $("#cash-payment").addClass("border-[#764A8733]");
            })
        </script>
    </div>
