<div>

    <!-- What our client says  -->
    <section class="mt-16 max-xl:mt-4">
        <h2
            class="mb-12 max-lg:mb-4 font-[jost] font-[500] text-center text-[42px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
            What Our Clients Say About
            Us</h2>
        <style>
            .owl-nav {
                gap: {{ (count($reviews) + 5) * 10 + 200 }}px !important;
            }

            @media only screen and (max-width: 640px) {
                .owl-nav {
                    gap: {{ (count($reviews) + 5) * 10 + 80 }}px !important;
                }
            }
        </style>
        <div class="container mx-auto">
            <section id="slider" class="pt-5 mx-auto">
                <div class="container mx-auto">
                    {{-- <h1 class="text-center"><b>Responsive Owl Carousel</b></h1> --}}
                    <div class="slider">
                        <div class="owl-carousel">
                            @foreach ($reviews as $review)
                                <div
                                    class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                    <div class="">
                                        <div class="flex justify-center">
                                            <div class="flex items-center">
                                                <div>
                                                    <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                        src="/storage/@if ($review->user?->photo) {{ $review->user->photo }}@else{{ 'default/face.png' }} @endif"
                                                        alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <h1
                                                        class="font-[Lato] font-[700] leo-h text-[24px] text-center text-[#353535]">
                                                        {{ $review->name }}
                                                    </h1>
                                                </div>
                                            </div>

                                            <div class="flex star-div mt-[40px]  ml-auto">
                                                @foreach ([1, 2, 3, 4, 5] as $star)
                                                    <a href="javascript:void(0)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" class="star" viewBox="0 0 22 22"
                                                            fill="#FFA033">
                                                            <path
                                                                d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                                fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                @endforeach

                                                {{-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="22" height="22" class="star"
                                                            viewBox="0 0 22 22" fill="#FFA033">
                                                            <path
                                                                d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                                fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></a>

                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="22" height="22" class="star"
                                                            viewBox="0 0 22 22" fill="#FFA033">
                                                            <path
                                                                d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                                fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></a>

                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="22" height="22" class="star"
                                                            viewBox="0 0 22 22" fill="#FFA033">
                                                            <path
                                                                d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                                fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></a>

                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="22" height="22" class="star"
                                                            viewBox="0 0 15 15" fill="none">
                                                            <path
                                                                d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                                stroke="#FFA033" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></a> --}}
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                        <div>
                                            <h1
                                                class="my-[19px] leo-h1 leo-h1 font-[Lato] font-[700] text-[24px] text-center text-[#353535] leading-[28.8px]">
                                                {{ $review->subject }}
                                            </h1>
                                        </div>
                                        <div>
                                            <p
                                                class="my-[17px] leo-p1 leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                                {{ $review->msg }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="mt-16 h-[2px] bg-[#380D37]"></div>
    
    <!-- Drop/submit a review  -->
    <section class="mt-16 md:mt-8 mb-5 md:px-28 px-12">
        <div
            class="text-center text-[#380D37] text-[42px] font-[jost] font-[500] max-md:my-[35px] leading-[61px] max-sm:leading-[40px]">
            <h1 class="max-sm:text-[34px] max-md:text-[45] max-lg:text-[] max-xl:text-[]"> Please Drop a Review!</h1>
        </div>
        <div
            class="grid grid-cols-2 max-sm:grid-cols-1 max-md:grid-cols-1 max-lg:grid-cols-2 mt-20 max-md:mt-12 max-sm:mt-[15px]">
            <div>
                <div>
                    <h1
                        class="text-[52px] text-[#DC275C] max-sm:text-[34px] max-md:text-[44] max-lg:text-[35px] max-xl:text-[45px] max-md:text-center font-[500] font-[jost] leading-[75.14px] max-sm:leading-[40px] max-md:leading-[60px] max-xl:leading-[52px]">
                        We Believe In The
                        </br> Power Of </br> Communication</h1>
                </div>
                <div>
                    <p
                        class="mt-8 text-[#353535] text-[24px] max-sm:text-[14px] max-md:text-[] max-lg:text-[20px] max-xl:text-[22px] max-md:text-center font-[jost] font-[500] leading-[30px] max-sm:leading-[20px]">
                        Share your
                        experience with us.</br> Drop a comment and we will look into it.</p>
                </div>
            </div>

            <form x-data="{
                name: '{{ $name }}',
                email: '{{ $email }}',
                subject: '',
                msg: '',
                spin: false,
                postSubmit() {
                    this.spin = true;
                    if (!this.name) {
                        toastr.warning('Please, Enter a name');
                        this.spin = false;
                        return false;
                    }
                    if (!this.email) {
                        toastr.warning('Please, Enter an email');
                        this.spin = false;
                        return false;
                    }
                    if (!this.msg) {
                        toastr.warning('Please, Write something as message');
                        this.spin = false;
                        return false;
                    }
                    $.ajax({
                        type: 'get',
                        url: '{{ route('post') }}',
                        data: {
                            name: this.name,
                            email: this.email,
                            subject: this.subject,
                            msg: this.msg,
                        },
                        dataType: 'json',
                        success: (response) => {
                            if (response.error) {
                                toastr.warning(response.error);
                                this.spin = false;
                                return false;
                            } else {
                                toastr.success('Your post is successfully submitted');
                                this.subject = '';
                                this.msg = '';
                                this.spin = false;
                            }

                        }
                    });
                }
            }"
                class="max-md:border-[1px] max-md:border-[#380D37] max-md:rounded-[4px] max-sm:p-[10px] max-md:p-[15px] max-sm:mt-[15px] max-md:my-[22px]">

                <div class="grid grid-cols-2 gap-2">
                    <span class="w-full">
                        <input x-model="name"
                            class=" h-[64px] max-sm:h-[40px] max-lg:h-[55px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px] italic font-[500] leading-[23px] py-[8px] pl-3 w-full"
                            id="name" type="text" placeholder="Name*">
                        @error('name')
                            <span class="text-[red] text-[12px] block ml-1">{{ $message }}</span>
                        @enderror
                    </span>
                    <span class="w-full">
                        <input x-model='email'
                            class=" h-[64px] max-sm:h-[40px] max-lg:h-[55px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px] italic font-[500] leading-[23px] py-[8px] pl-3 w-full"
                            id="email" type="email" placeholder="Email*">
                        @error('email')
                            <span class="text-[red] text-[12px] block ml-1">{{ $message }}</span>
                        @enderror
                    </span>
                </div>
                <div>
                    <input x-model="subject"
                        class=" h-[64px] max-sm:h-[40px] max-lg:h-[55px] rounded-[4px] w-full py-2 px-3 bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px] mt-[20px] mb-[20px] italic font-[500] "
                        id="subject" type="text" placeholder="Subject(optional)">
                    @error('subject')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <textarea x-model='msg'
                        class="h-[271px] max-sm:h-[150px] max-lg:h-[220px] max-xl:h-[230px] rounded-[4px] w-full py-2 pb-32 px-3 bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px]  italic font-[500] "
                        id="message" rows="4" placeholder=" Message"></textarea>
                    @error('msg')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center max-md:justify-center flex-col">
                    <button @click="postSubmit()"
                        class="fill-up-btn text-[#f2f2f2] text-center text-[16px] h-[44px] px-[40px] py-[10px] rounded-[4px] font-[500] font-[jost] mt-[15px]  bg-gradient-to-r from-[#380D37] to-[#DC275C] "
                        type="button">
                        Post
                        <div x-show='spin'
                            class="absolute right-0 inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                            </span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </section>

</div>
@script
<script>
    $(document).ready(function(){

        $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                pagination: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                center: true,
                navText: [
                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-9 arrow"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                    '<svg xmlns="http:www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-9 arrow"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /> </svg>'
                ],
                responsive: {
                    0: {
                        items: 1,

                    },
                    640: {
                        items: 1,


                    },
                    1024: {
                        items: 3,


                    }
                }
            });
    })
</script>
@endscript
