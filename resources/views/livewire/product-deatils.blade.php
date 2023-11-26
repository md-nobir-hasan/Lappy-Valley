<x-slot name='styles'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
</x-slot>

<x-slot name='script'>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script>
        // set the default active slide to the first one
        let slideIndex = 0;
        // showSlide(slideIndex);


        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");

            if (n > slides.length - 1) {
                slideIndex = 0
            }
            if (n < 0) {
                slideIndex = slides.length - 1
            }

            // const dots = document.getElementsByClassName('dot');
            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // show the active slide
            slides[slideIndex].classList.remove('hidden');
        }
    </script>
</x-slot>
<div class="container mx-auto">
    <div class=>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Home/Brand New/
            Lenovo/Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB </h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>
    <!-- -----------key-Feature -section----- -->
    <div class="grid grid-cols-2 items-center mt-[30px]">
        <div>
            <div class="[background:lightgray 50% / cover no-repeat] flex justify-center">
                <img class="object-center"
                    src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                    alt="Product">
            </div>
            <div class="flex items-center justify-center mt-2">
                <div class="w-[100px] border-[2px] border-[#380D37] rounded-[3px] ">
                    <img class="object-center"
                        src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                        alt="">
                </div>
                <div class="w-[80px] border-b-[2px] border-t-[2px] border-r-[2px] border-[rgba(53_53_53_0.30)]">
                    <img class="object-center"
                        src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                        alt="">
                </div>
                <div class="w-[80px] border-b-[2px] border-t-[2px] border-r-[2px] border-[rgba(53_53_53_0.30)]">
                    <img class="object-center"
                        src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                        alt="">
                </div>
            </div>
        </div>
        <div class="text-left ">
            <h1 class="font-[jost] text-[#380D37] lg:text-[28px] xl:text-[30px] font-[600] leading-[-1px]">Lenovo
                IdeaPad 15AMN7 AMD Ryzen 5 7520U</h1>
            <ul class="mt-6 mb-3 leading-[55px]">
                <li class=" lg:text-[22px] xl:text-[24px] text-[#353535] font-[jost] font-[600]">Key Features:</li>
                <li class=" lg:text-[20px] xl:text-[22px] text-[#353535] font-[jost] font-[500]">MPN: 82VG008YIN
                </li>
                <li class=" lg:text-[20px] xl:text-[22px] text-[#353535] font-[jost] font-[500]"> Model: IdeaPad 1
                    15AMN7</li>
                <li class=" lg:text-[20px] xl:text-[22px] text-[#353535] font-[jost] font-[500]">RAM: 8GB DDR5
                    5500MHz, Storage: 256GB SSD</>
                <li class=" lg:text-[20px] xl:text-[22px] text-[#353535] font-[jost] font-[500]">Display: 15.6" FHD
                    (1920X1080)</li>
                <li class=" lg:text-[22px] xl:text-[23px] text-[#353535] font-[jost] font-[600]">Price:</li>
                <li class=" lg:text-[22px] xl:text-[24px] text-[#DC275C] font-[jost] font-[700]">1,50,000 TK</li>
            </ul>
            <button
                class="text-[white] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[20px] py-[18px] px-[50px] font-[600] mt-8 rounded-[5px]">BUY
                NOW</button>
        </div>
    </div>
    <!-- -------------ideapad---section---end--- -->
    <div class="h-[3px] bg-[#380D37] my-[50px]"></div>

    <!-- -----------------description------ -->
    <div class="my-[15px]">
        <div class="flex gap-[20px]">
            <a data-area="specification"
                class="focus:bg-[#380D37] bg-[#F2F2F2] text-[20px] text-[#380D37] focus:text-[#F2F2F2] text-center font-[700] font-[jost] py-[10px] px-6 rounded-[5px] w-[168px] h-[50px]">
                Specification</a>
            <a href="#description" data-te-smooth-scroll-init data-te-offset="25"
                class="focus:bg-[#380D37] bg-[#F2F2F2] text-[20px] text-[#380D37] focus:text-[#F2F2F2] text-center font-[700] font-[jost] py-[10px] px-6 rounded-[5px] w-[168px] h-[50px]">
                Description</a>
            <a href='#review' data-te-smooth-scroll-init data-te-offset="25"
                class="  focus:bg-[#380D37] bg-[#F2F2F2] text-[20px] text-[#380D37] focus:text-[#F2F2F2]  text-center font-[700] font-[jost] py-[10px] px-8 rounded-[5px] w-[168px] h-[50px]"
                data-area="ask-question">Review</a>
        </div>
    </div>
    <!-- -----table--section---start----- -->
    <div class="flex justify-between gap-[30px] ">
        <div class="w-[1100px]">
            <section class="border-[2px] border-[#380D37] p-[20px] rounded-[5px] leading-[50px]" id="specification">
                <div class="text-[#353535] text-[20px] font-[jost] font-[500] ">
                    <h2>Specification</h2>
                </div>
                <table class="w-full">

                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[5px] pl-[14px] pr-[500px] rounded-[5px] w-[822px]"
                                colspan="3">Processor:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px] mb-[30px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Processor Brand:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">15.6"</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Processor Model:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">TN</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Processor Frequency:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">FHD (1920*1080)</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Processor Core:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">N/A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Processor Thread:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">220 nits, anti-glare, 170° Viewing
                                Angle</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pb-[100px] pl-[20px]">CPU Cache:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">
                                <li class="list-none">L1 Cache: 256KB</li>
                                <li class="list-none">L2 Cache: 2MB</li>
                                <li class="list-none">L3 Cache: 4MB</li>
                            </td>
                        </tr>
                    </tbody>
                    <!-- ----------2nd --part----- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px] mt-[10px]"
                                colspan="3">Display Features:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Display Size:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">15.6"</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Display Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">TN</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Display Resolution:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">FHD (1920*1080)</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Touch Screen:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">N/A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Display Features:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">220 nits, anti-glare, 170° Viewing
                                Angle</td>
                        </tr>
                    </tbody>
                    <!-- --------3rd---------part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Memory:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">RAM:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">8GB (On Board)</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">RAM Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">DDR5/td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Removable:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">NO</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">BUS Speed:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">5500MHz</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Total RAM Slot:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1</td>
                        </tr>
                    </tbody>
                    <!-- --------------4th---part------------------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Storage:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Storage Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">NVMe SSD</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Storage Capacity:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">512 GB</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Extra M.2 Slot:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">N/A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Processor Core:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">N/A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Supported SSD Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">2PCIe NVMe M.2</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pb-[100px] pl-[20px]">Storage Upgrade:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[400]">Installed SSD can be upgradeable</td>
                        </tr>
                    </tbody>
                    <!-- ------------------5th------part------------------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Graphics:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Graphics Model:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">AMD Radeon 610M</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Graphics Memory:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Shared</td>
                        </tr>
                    </tbody>
                    <!-- -------------------6th--part------------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Keyboard & Touchpad:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Keyboard Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Standard</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">TouchPad:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Yes</td>
                        </tr>
                    </tbody>
                    <!-- ----------7th--part------------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Camera & Audio:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">WebCam:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Yes</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Microphone:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Yes</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Speaker:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Yes</td>
                        </tr>
                    </tbody>
                    <!-- -----------8th---part----- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Ports & Slots:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Optical Drive:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">N/A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Card Reader:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">SD Media Card Reader</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">HDMI Port:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1x HDMI 1.4b)</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">USB 2 Port:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1x USB 2.0 Type-A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">USB 3 Port:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1x USB 3.2 Gen 1 Type-A</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pb-[100px] pl-[20px]">USB Type-C /
                                Thunderbolt Port:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1x USB-C 3.2 Gen 1 (support data
                                transfer only)</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Headphone & Microphone
                                Port::</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1 x Headphone/ Microphone Port
                                Combo/td>
                        </tr>
                    </tbody>
                    <!-- ---------------9th--part------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Network & Connectivity:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">WiFi:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">11ax, 2x2</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Bluetooth:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Bluetooth 5.0</td>
                        </tr>
                    </tbody>
                    <!-- ---------------10th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Security:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Fingerprint Sensor:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">N/A"</td>
                        </tr>
                    </tbody>
                    <!-- ---------------11th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Software:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Operating System:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Windows</td>
                        </tr>
                    </tbody>
                    <!-- ---------------12th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Power:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Battery Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">3 Cell Li-ion</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Battery Capacity:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">42Whr</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Adapter Type:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">65W Round Tip (3-pin)</td>
                        </tr>
                    </tbody>
                    <!-- ---------------13th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Physical Specification:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Color:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">Cloud Grey</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Dimensions:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">325.3 x 216.5 x 17.9 mm/td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Weight:</td>
                            <td class="text-[#353535] text-[16px] font-[400]">1.58 kg</td>
                        </tr>
                    </tbody>
                    <!-- ---------------14th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] font-[600] pl-[14px] pr-[500px] rounded-[5px]"
                                colspan="3">Warranty :</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[400] pl-[20px]">Warranty Details</td>
                            <td class="text-[#353535] text-[16px] font-[400]">2 years warranty ( Battery adapter 1
                                year)</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="mt-[20px] border-[2px] border-[#380D37] p-[20px] rounded-[5px] " id="description">
                <div>
                    <h2 class="text-[#353535] text-[20px] font-[600]">Description</h2>
                </div>
                <div class="mt-[20px] mb-[40px]">
                    <h2 class="text-justify text-[#353535] text-[18px] font-[600]">Lenovo IdeaPad 1 15AMN7 AMD
                        Ryzen 5 512GB SSD 15.6" FHD Laptop with DDR5 RAM</h2>
                    <p class="text-justify text-[#353535] text-[16px] font-[500] font-[jost]">The Lenovo IdeaPad 1
                        15AMN7 is a
                        stylish and powerful laptop that offers high-performance computing for a variety of jobs.
                        This laptop can perform complex programs with ease thanks to an AMD Ryzen 5 7520U (2.8 GHz
                        up to 4.3 GHz).
                        The processor has four cores and eight threads, allowing you to multitask effectively and
                        effortlessly.
                        This laptop has 8GB DDR5-5500 Memory, which offers smooth performance even while running
                        many apps at the same time.
                        The 512GB SSD PCIe offers plenty of storage capacity for your data, documents, and
                        multimedia files.
                        SSD technology enables rapid boot-up and load times, allowing you to complete your tasks
                        quickly.
                        The AMD Radeon 610M graphics provides exceptional graphics performance, making this laptop
                        suitable for gaming and video editing.
                        The 14-inch FHD (1920x1080) display provides clear and sharp graphics, letting you view
                        high-quality entertainment without pixelation or blurring.
                        This Lenovo IdeaPad 1 15AMN7 is a powerful and flexible laptop that can meet a variety of
                        computing demands.
                        Whether you're a student, professional, or gamer, this laptop is a dependable option that
                        can manage your workload with ease.</p>
                </div>
                <div itemprop="description">
                    <h2 class="text-justify text-[#353535] text-[18px] font-[600]">Buy Lenovo IdeaPad 1 15AMN7 AMD
                        Ryzen 5 512GB 15.6" FHD Laptop with DDR5 RAM from the best Computer Shop in BD</h2>
                    <p class="text-justify text-[#353535] text-[16px] font-[500]">In Bangladesh, you can get the
                        original Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 15.6" FHD Laptop from LappyVally.
                        We have a large collection of the latest Lenovo Laptops to purchase. Order Online Or Visit
                        your shop to get yours at the lowest price.
                        The Lenovo IdeaPad 1 15AMN7 AMD Ryzen 5 15.6" FHD Laptop comes with 2 years warranty (
                        Battery adapter 1 year).</p>
                </div>
            </section>


            <section class="mt-[20px] border-[2px] border-[#380D37] p-[20px] rounded-[5px]" id='review'>
                <div class="flex items-center justify-between">
                    <div class="title-n-action">
                        <h2 class="my-[10px] font-[jost] font-[600]">Reviews(1))</h2>
                        <p class="my-[10px] font-[jost] font-[500]">Get Specific Details about this product from
                            customers who own it.</p>
                    </div>

                    <div class="space-y-2">
                        <button type="button"
                            class="inline-block rounded bg-gradient-to-r from-[#380D37] to-[#DC275C] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable"
                            data-te-ripple-init data-te-ripple-color="light">
                            Write a review
                        </button>
                    </div>

                    <!--Vertically centered modal-->
                    <div data-te-modal-init
                        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
                        aria-modal="true" role="dialog">
                        <div data-te-modal-dialog-ref
                            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                            <div
                                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                <div
                                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                    <!--Modal title-->
                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                        id="exampleModalCenterTitle">
                                        Review
                                    </h5>
                                    <!--Close button-->
                                    <button type="button"
                                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                        data-te-modal-dismiss aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!--Modal body-->
                                {{-- <div class="relative p-4">
                                    <p>This is a vertically centered modal.</p>
                                </div> --}}

                                <!--Modal footer-->
                                {{-- <div
                                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                    <button type="button"
                                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                        Close
                                    </button>
                                    <button type="button"
                                        class="ml-1 inline-block rounded bg-gradient-to-r from-[#380D37] to-[#DC275C] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        Save changes
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!--Verically centered scrollable modal-->
                    <div data-te-modal-init
                        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                        id="exampleModalCenteredScrollable" tabindex="-1"
                        aria-labelledby="exampleModalCenteredScrollableLabel" aria-modal="true" role="dialog">
                        <div data-te-modal-dialog-ref
                            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                            <div
                                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                <div
                                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                    <!--Modal title-->
                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                        id="exampleModalCenteredScrollableLabel">
                                        Review
                                    </h5>
                                    <!--Close button-->
                                    <button type="button"
                                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                        data-te-modal-dismiss aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!--Modal body-->
                                <div class="relative p-4">
                                    <div class="flex justify-between gap-[10px] my-[10px]">
                                        <input type="text" placeholder="First Name"
                                            class="relative p-[10px] m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#F2F2F2] font-[jost] font-[400] text-[12px] text-[#000000] italic" />
                                        <input type="text" placeholder="Last Name"
                                            class="relative p-[10px]  m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#F2F2F2] font-[jost] font-[400] text-[12px] text-[#000000] italic" />
                                    </div>
                                    <div class="mt-[20px]">
                                        <textarea placeholder="Write your review here..."
                                            class="relative pl-[10px] pt-[10px] pb-[100px] m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#F2F2F2] font-[jost] font-[400] text-[12px] text-[#000000] italic"
                                            id="message-text"></textarea>
                                    </div>

                                    <div class=' flex justify-between my-[50px] items-center'>
                                        <div class='items-center'>
                                            <div>
                                                <h1
                                                    class='text-[24px] text-[#380D37] font-[jost] font-[50px] leading-[34.68px]'>
                                                    Reviews</h1>
                                            </div>
                                            <div class='flex my-[10px] items-center'>
                                                <img src="/storage/product/star2.svg" alt="Product"
                                                    class='h-[37.45px]'>
                                                <img src="/storage/product/star2.svg" alt="Product"
                                                    class='h-[37.45px]'>
                                                <img src="/storage/product/star2.svg" alt="Product"
                                                    class='h-[37.45px]'>
                                                <img src="/storage/product/star-white.svg" alt="Product"
                                                    class='h-[37.45px]'>
                                                <img src="/storage/product/star-white.svg" alt="Product"
                                                    class='h-[37.45px]'>
                                            </div>
                                        </div>
                                        <div class='mt-[20px]'>
                                            <button
                                                class='px-[25px] py-[12px] rounded-[4px] items-center text-[16px] text-[#F2F2F2] font-[jost] font-[500] leading-[28.9px] bg-gradient-to-r from-[#380D37] to-[#DC275C]'>Post
                                                your review</button>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <div class="mb-3">
                                        {{-- <label for="formFileMultiple"
                                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Multiple
                                            files input example</label> --}}
                                        <input
                                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-[jost] text-[#380D37] transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-[#380D37] file:px-3 file:py-[0.32rem] file:text-[#f2f2f2] file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 hover:file:text-[#380D37] focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                            type="file" id="formFileMultiple" multiple />
                                    </div>
                                </div>

                                <!--Modal footer-->
                                {{-- <div
                                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                    <button type="button"
                                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                        Close
                                    </button>
                                    <button type="button"
                                        class="ml-1 inline-block rounded bg-gradient-to-r from-[#380D37] to-[#DC275C]   px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        Save changes
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>



                </div>
                <div class="flex my-[10px]">
                    <img src="../dist/img/star2.svg" alt="">
                    <img src="../dist/img/star2.svg" alt="">
                    <img src="../dist/img/star2.svg" alt="">
                    <img src="../dist/img/star2.svg" alt="">
                    <img src="../dist/img/star2.svg" alt="">
                    <span class="font-[jost] font-[600] mt-[5px] ml-[5px]">5 out of 5</span>
                </div>
                <div class="h-[2px] bg-[#764A8733]"></div>

                <div class="mt-[10px]">
                    <div class="flex my-[10px]">
                        <img src="../dist/img/star2.svg" alt="" class="h-[15px]">
                        <img src="../dist/img/star2.svg" alt="" class="h-[15px]">
                        <img src="../dist/img/star2.svg" alt="" class="h-[15px]">
                        <img src="../dist/img/star2.svg" alt="" class="h-[15px]">
                        <img src="../dist/img/star2.svg" alt="" class="h-[15px]">
                    </div>
                    <div>
                        <span class="font-[jost] font[600] mb-[15px]">Goog Product!</span>
                    </div>
                    <div>
                        <span class="font-[jost] font[600]">By Anowar Hossain on 14 May 2023</span>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <div class="p-[10px] border-[2px] border-[#380D37] rounded-[3px] w-[400px] h-[650px]">

                <section class="">
                    <div class="p-[10px]">
                        <h1 class="text-[#380D37] text-[20px] font-[jost] font-[500] flex justify-center">Related
                            Products</h1>
                        <div class="h-[3px] bg-[#380D37]"></div>
                    </div>
                    <div class="grid justify-center grid-cols-2">
                        <div class="w-[100px]">
                            <img class="object-center"
                                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-[#000000] text-[16px] font-[jost] font-[500] my-[10px]">Lenovo IdeaPad 1
                                15AMN7
                                AMD Ryzen 5 512GB SSD
                                15.6" FHD Laptop
                                with DDR5 RAM</p>
                            <a href="" class="text-[#DC275C] text-[20px] font-[jost] font-[600]">1,50,000
                                TK</a>

                        </div>
                    </div>
                    <!-- </section> -->
                    <!-- <section> -->
                    <div class="p-[10px]">

                        <div class="h-[3px] bg-[#764A8733]"></div>
                    </div>
                    <div class="grid justify-center grid-cols-2">
                        <div class="w-[100px]">
                            <img class="object-center"
                                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-[#000000] text-[16px] font-[jost] font-[500] my-[10px]">Lenovo IdeaPad 1
                                15AMN7
                                AMD Ryzen 5 512GB SSD
                                15.6" FHD Laptop
                                with DDR5 RAM</p>
                            <a href="" class="text-[#DC275C] text-[20px] font-[jost] font-[600]">1,50,000
                                TK</a>

                        </div>
                    </div>
                    <!-- </section> -->
                    <!-- <section> -->
                    <div class="p-[10px]">

                        <div class="h-[3px] bg-[#764A8733]"></div>
                    </div>
                    <div class="grid justify-center grid-cols-2">
                        <div class="w-[100px]">
                            <img class="object-center"
                                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-[#000000] text-[16px] font-[jost] font-[500] my-[10px]">Lenovo IdeaPad 1
                                15AMN7
                                AMD Ryzen 5 512GB SSD
                                15.6" FHD Laptop
                                with DDR5 RAM</p>
                            <a href="" class="text-[#DC275C] text-[20px] font-[jost] font-[600]">1,50,000
                                TK</a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ------------------2nd--part------------- -->
            <div class="p-[10px] border-[2px] border-[#380D37] rounded-[3px] w-[400px] h-[650px] mt-[20px]">
                <section class="">
                    <div class="p-[10px]">
                        <h1 class="text-[#380D37] text-[20px] font-[jost] font-[500] flex justify-center">Related
                            Products</h1>
                        <div class="h-[3px] bg-[#380D37]"></div>
                    </div>
                    <div class="grid justify-center grid-cols-2">
                        <div class="w-[100px]">
                            <img class="object-center"
                                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-[#000000] text-[16px] font-[jost] font-[500] my-[10px]">Lenovo IdeaPad 1
                                15AMN7
                                AMD Ryzen 5 512GB SSD
                                15.6" FHD Laptop
                                with DDR5 RAM</p>
                            <a href="" class="text-[#DC275C] text-[20px] font-[jost] font-[600]">1,50,000
                                TK</a>
                        </div>
                    </div>
                    <!-- </section> -->

                    <!-- <section> -->
                    <div class="p-[10px]">

                        <div class="h-[3px] bg-[#764A8733]"></div>
                    </div>
                    <div class="grid justify-center grid-cols-2">
                        <div class="w-[100px]">
                            <img class="object-center"
                                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-[#000000] text-[16px] font-[jost] font-[500] my-[10px]">Lenovo IdeaPad 1
                                15AMN7
                                AMD Ryzen 5 512GB SSD
                                15.6" FHD Laptop
                                with DDR5 RAM</p>
                            <a href="" class="text-[#DC275C] text-[20px] font-[jost] font-[600]">1,50,000
                                TK</a>

                        </div>
                    </div>
                    <!-- </section> -->

                    <!-- <section> -->
                    <div class="p-[10px]">

                        <div class="h-[3px] bg-[#764A8733]"></div>
                    </div>
                    <div class="grid justify-center grid-cols-2">
                        <div class="w-[100px]">
                            <img class="object-center"
                                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-[#000000] text-[16px] font-[jost] font-[500] my-[10px]">Lenovo IdeaPad 1
                                15AMN7
                                AMD Ryzen 5 512GB SSD
                                15.6" FHD Laptop
                                with DDR5 RAM</p>
                            <a href="" class="text-[#DC275C] text-[20px] font-[jost] font-[600]">1,50,000
                                TK</a>
                        </div>
                    </div>
                </section>

                <div class="h-screen flex justify-center items-center ">
                    <div x-data="range()" x-init="mintrigger();
                    maxtrigger()" class="relative max-w-xl w-full">
                        <div>
                            <input type="range" step="100" x-bind:min="min"
                                x-bind:max="max" x-on:input="mintrigger" x-model="minprice"
                                class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                            <input type="range" step="100" x-bind:min="min"
                                x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice"
                                class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                            <div class="relative z-10 h-2">

                                <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>

                                <div class="absolute z-20 top-0 bottom-0 rounded-md bg-green-300"
                                    x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'"></div>

                                <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-green-300 rounded-full -mt-2"
                                    x-bind:style="'left: ' + minthumb + '%'"></div>

                                <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-green-300 rounded-full -mt-2"
                                    x-bind:style="'right: ' + maxthumb + '%'"></div>

                            </div>

                        </div>

                        <div class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">
                            <div>
                                <input type="text" maxlength="5" x-on:input.debounce="mintrigger"
                                    x-model="minprice" wire:model.debounce.300="minPrice"
                                    class="w-24 px-3 py-2 text-center border border-gray-200 rounded-lg bg-gray-50 focus:border-yellow-400 focus:outline-none">
                            </div>
                            <div>
                                <input type="text" maxlength="5" x-on:input.debounce.300="maxtrigger"
                                    x-model="maxprice" wire:model.debounce="maxPrice"
                                    class="w-24 px-3 py-2 text-center border border-gray-200 rounded-lg bg-gray-50 focus:border-yellow-400 focus:outline-none">
                            </div>
                        </div>

                    </div>

                    <script>
                        function range() {
                            return {
                                minprice: 0,
                                maxprice: 10000,
                                min: 0,
                                max: 10000,
                                minthumb: 0,
                                maxthumb: 0,
                                mintrigger() {
                                    this.validation();
                                    this.minprice = Math.min(this.minprice, this.maxprice - 500);
                                    this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
                                },
                                maxtrigger() {
                                    this.validation();
                                    this.maxprice = Math.max(this.maxprice, this.minprice + 200);
                                    this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
                                },
                                validation() {
                                    if (/^\d*$/.test(this.minprice)) {
                                        if (this.minprice > this.max) {
                                            this.minprice = 9500;
                                        }
                                        if (this.minprice < this.min) {
                                            this.minprice = this.min;
                                        }
                                    } else {
                                        this.minprice = 0;
                                    }
                                    if (/^\d*$/.test(this.maxprice)) {
                                        if (this.maxprice > this.max) {
                                            this.maxprice = this.max;
                                        }
                                        if (this.maxprice < this.min) {
                                            this.maxprice = 200;
                                        }
                                    } else {
                                        this.maxprice = 10000;
                                    }
                                }
                            }
                        }
                    </script>
                    <div class="flex items-end justify-end absolute bottom-0 right-0 mb-4 mr-4">
                        <div>
                            <a title="Buy me a coffee" href="https://www.buymeacoffee.com/rHcLDkY" target="_blank"
                                class="block w-16 h-16">
                                <img alt="Buy me a coffee"
                                    class="object-cover object-center w-full h-full rounded-full shadow-md hover:shadow-lg"
                                    src="https://cdn.dribbble.com/users/3349322/screenshots/14039201/media/616e4ae6995fb288e434c3f0927541ce.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
