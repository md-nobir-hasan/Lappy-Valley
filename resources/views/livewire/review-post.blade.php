<div>
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
