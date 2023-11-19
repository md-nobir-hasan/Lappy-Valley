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
                    alt="">
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
            <a href="#description"  data-te-smooth-scroll-init
                    data-te-offset="25"
                class="focus:bg-[#380D37] bg-[#F2F2F2] text-[20px] text-[#380D37] focus:text-[#F2F2F2] text-center font-[700] font-[jost] py-[10px] px-6 rounded-[5px] w-[168px] h-[50px]">
                Description</a>
            <a class="focus:bg-[#380D37] bg-[#F2F2F2] text-[20px] text-[#380D37] focus:text-[#F2F2F2]  text-center font-[700] font-[jost] py-[10px] px-8 rounded-[5px] w-[168px] h-[50px]"
                data-area="ask-question">Review</a>
        </div>
    </div>
    <!-- -----table--section---start----- -->
    <div class="flex justify-between gap-[30px] ">
        <div class="w-[878px]">
            <section class="border-[2px] border-[#380D37] p-[20px] rounded-[5px] leading-[50px]" id="specification">
                <div class="text-[#353535] text-[20px] font-[jost] font-[500] ">
                    <h2>Specification</h2>
                </div>
                <table class="">

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
                    <p class="text-justify text-[#353535] text-[16px] font-[500]">The Lenovo IdeaPad 1 15AMN7 is a
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
            <section class="mt-[20px] border-[2px] border-[#380D37] p-[20px] rounded-[5px]">
                <div class="flex items-center justify-between">
                    <div class="title-n-action">
                        <h2 class="my-[10px] font-[jost] font-[600]">Reviews(1))</h2>
                        <p class="my-[10px] font-[jost] font-[500]">Get Specific Details about this product from
                            customers who own it.</p>
                    </div>
                    <div class="border-[2px] border-[#380D37] py-[5px] px-[10px] rounded-[5px]">
                        <a href="#" class="font-[jost] font-[600]">Write a review</a>
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
            <div class="p-[10px] border-[2px] border-[#380D37] rounded-[3px] w-[301px] h-[650px]">

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
            <div class="p-[10px] border-[2px] border-[#380D37] rounded-[3px] w-[300px] h-[650px] mt-[20px]">
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
        </div>
    </div>
</div>
