<div x-data='{open: false}' class=" top-0 left-0">
    {{-- <div class='p-[30px] border-[3px] border-[#380D37] w-[548px] h-[534px] mx-auto my-[100px] rounded-[4px]'>

      <div
      class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
      <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
          Review
      </h3>
      <button  type="button"
          class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="crud-modal">
          <svg class="w-3 h-3" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span x-show='!open' class="sr-only">Close modal</span>
      </button>
  </div>

       <div class='flex justify-between w-[496px]'>
           <input type="text" placeholder='First Name'
               class='w-[236px] h-[44px] rounded-[4px] border-[2px] border-[#380D37] italic text-[#000000] text-[12px] font-[jost] font-[400] leading-[17.34px] px-[10px]'>
           <input type="text" placeholder='Last Name'
               class='w-[236px] h-[44px] rounded-[4px] border-[2px] border-[#380D37] italic text-[#000000] text-[12px] font-[jost] font-[400] leading-[17.34px] px-[10px]'>
       </div>
       <div class='my-[10px]'>
           <input type='text' placeholder='Write your review here...'
               class='w-[496px] pb-[200px] pt-[10px] rounded-[4px] border-[2px] border-[#380D37] italic text-[#000000] text-[12px] font-[jost] font-[400] leading-[17.34px] px-[10px]'>
       </div>
       <div class=' flex justify-between my-[50px] items-center'>
           <div class='items-center'>
               <div>
                   <h1 class='text-[24px] text-[#380D37] font-[jost] font-[50px] leading-[34.68px]'>Reviews</h1>
               </div>
               <div class='flex my-[10px] items-center'>
                   <img src="/storage/product/star2.svg" alt="Product" class='h-[37.45px]'>
                   <img src="/storage/product/star2.svg" alt="Product" class='h-[37.45px]'>
                   <img src="/storage/product/star2.svg" alt="Product" class='h-[37.45px]'>
                   <img src="/storage/product/star-white.svg" alt="Product" class='h-[37.45px]'>
                   <img src="/storage/product/star-white.svg" alt="Product" class='h-[37.45px]'>
               </div>
           </div>
           <div class='mt-[20px]'>
               <button
                   class=' w-[236px] h-[60.69px] rounded-[4px] items-center text-[20px] text-[#F2F2F2] font-[jost] font-[500] leading-[28.9px] bg-gradient-to-r from-[#380D37] to-[#DC275C]'>Post
                   your review</button>
           </div>
       </div>
       <button type="submit"
       class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
       <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd"
               d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
               clip-rule="evenodd"></path>
       </svg>
       Add new product
   </button>
   </div>


  

<!-- Modal toggle -->
<div x-data="{open:false}" class="">
    <button @click="open = ! open" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Toggle modal
      </button>
      
      <!-- Main modal -->
      <div x-show='open' id="crud-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                          Create New Product
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <form class="p-4 md:p-5">
                      <div class="grid gap-4 mb-4 grid-cols-2">
                          <div class="col-span-2">
                              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                              <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                          </div>
                          <div class="col-span-2 sm:col-span-1">
                              <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                              <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                          </div>
                          <div class="col-span-2 sm:col-span-1">
                              <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                              <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                  <option selected="">Select category</option>
                                  <option value="TV">TV/Monitors</option>
                                  <option value="PC">PC</option>
                                  <option value="GA">Gaming/Console</option>
                                  <option value="PH">Phones</option>
                              </select>
                          </div>
                          <div class="col-span-2">
                              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                              <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                          </div>
                      </div>
                      <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                          Add new product
                      </button>
                  </form>
              </div>
          </div>
      </div> 
</div> --}}

    {{-- <style>

:root {
    --s-primary: #ef4a23;
    --s-secondary: #3749bb;
    --s-hf-bg: #081621;
    --s-b-bg: #f2f4f8;
    --s-m-bg: #6e2594;
    --s-s-bg: rgba(55,73,187,.1);
    --s-f-c1: #666;
    --s-f-c2: #fff;
}
  .price-filter {
    display: inline-block;
    /* width: 100%; */
    padding: 0 20px 20px;
    height: 170px;
}

.ws-box {
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0,0,0,.1);
}

.price-filter .label {
    margin: 0 -20px 30px;
}

.price-filter .label, .filter-group .label {
    padding: 0 0 0 20px;
    height: 50px;
    line-height: 50px;
    cursor: pointer;
    color: #111;
    font-size: 17px;
    border-bottom: 1px solid #eee;
}
.pf-wrap {
    height: 40px;
    overflow: hidden;
}
.filters .range-label {
    position: relative;
}
.filters .range-label input {
    float: left;
    width: 80px;
    height: 30px;
    border: 1px solid #c5cbd5;
    margin: 5px 0 0 -1px;
    outline: 0;
    padding: 6px 0;
    border-radius: 0;
    font-size: 14px;
    text-align: center;
}
.filters .range-label {
    position: relative;
}
filters .range-label.to input {
    float: right;
}

.filters .range-label input {
    /* float: left; */
    width: 80px;
    height: 30px;
    border: 1px solid #c5cbd5;
    margin: 5px 0 0 -1px;
    outline: 0;
    padding: 6px 0;
    border-radius: 0;
    font-size: 14px;
    text-align: center;
}
.price-filter .noUi-horizontal {
    width: calc(100% - 20px);
    margin-top: 10px;
}

.noUi-horizontal {
    height: 10px;
    width: 84%;
    margin: 0 auto;
}
.noUi-target {
    position: relative;
    direction: ltr;
}
.price-filter .noUi-base {
    border-radius: 0;
    border: none;
    box-shadow: none;
    background: #eee;
}
.noUi-base, .noUi-connects {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
}
.noUi-connects {
    overflow: hidden;
    border-radius: 3px;
    z-index: 0;
}

.noUi-base, .noUi-connects {
    width: 100%;
    height: 100%;
    position: relative;
}
.price-filter .noUi-connect {
    background: var(--s-primary);
    transform: translate(0%, 0px) scale(0.46602, 1);
}
.noUi-connect, .noUi-origin {
    will-change: transform;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    -ms-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}

.noUi-horizontal .noUi-origin {
    left: auto;
    right: 0;
    height: 0;
    transform: translate(-100%, 0px);
    z-index: 5;
}
.noUi-connect, .noUi-origin {
    will-change: transform;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    -ms-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}
.noUi-target, .noUi-target * {
    -webkit-touch-callout: none;
    -webkit-tap-highlight-color: transparent;
    -webkit-user-select: none;
    -ms-touch-action: none;
    touch-action: none;
    -ms-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.price-filter .noUi-handle {
    background: #fff;
    border: 2px solid var(--s-primary);
    box-shadow: 0 0 0 4px #fff inset , 0 0 0 9px var(--s-primary) inset , 0 0 0 2px #fff;
}

.noUi-handle {
    position: absolute;
    top: -6px;
    height: 20px;
    width: 20px;
    border-radius: 50px;
    outline: none;
    right: -10px!important;
    left: auto;
    border: 1px solid #d9d9d9;
    background: #fff;
    cursor: default;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb, 0 3px 6px -3px #bbb;
}

.noUi-horizontal .noUi-origin {
    left: auto;
    right: 0;
    height: 0;
    transform: translate(-53.398%, 0px);
    z-index: 6;
}
.noUi-connect, .noUi-origin {
    will-change: transform;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    -ms-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}

.price-filter .noUi-handle {
    background: #fff;
    border: 2px solid var(--s-primary);
    box-shadow: 0 0 0 4px #fff inset , 0 0 0 9px var(--s-primary) inset , 0 0 0 2px #fff;
}

.noUi-handle {
    position: absolute;
    top: -6px;
    height: 20px;
    width: 20px;
    border-radius: 50px;
    outline: none;
    right: -10px!important;
    left: auto;
    border: 1px solid #d9d9d9;
    background: #fff;
    cursor: default;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb, 0 3px 6px -3px #bbb;
}


</style>
  
<div class="price-filter ws-box">
  <div class="label">
    <span>Price Range</span>
  </div>
  <div class="pf-wrap">
  <div id="rang-slider" class="noUi-horizontal noUi-target noUi-ltr" data-from="15200" data-to="65999" data-min="15200" data-max="65999"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="15200.00" title="Lower Handle"></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="65999.00" title="Upper Handle"></div></div></div></div>
  </div>
  <label class="range-label from"><input class="border-[1px] border-black" type="num" id="range-to" name="from"></label>
  <label class="range-label to"><input class="border-[1px] border-black" type="num" id="range-from" name="to"></label>
</div> --}}

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .p-item-page .bottom-bar {
            padding: 15px 0;
            margin: 15px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            min-height: 36px;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        @media (min-width: 768px) .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .pagination li {
            display: inline-block;
            margin-right: 5px;
            font-size: 12px;
            font-weight: bold;
            line-height: 34px;
            text-align: center;
            min-width: 36px;
            text-decoration: none;
            transition: background-color .3s;
        }

        .pagination li span.disabled {
            /* color: #666; */
            cursor: default;
        }

        .pagination li a,
        .pagination li span {
            background: #f1f3f5;
            padding: 0 10px;
            color: #111;
            display: block;
            border-radius: 4px;
        }

        .pagination li {
            display: inline-block;
            margin-right: 5px;
            font-size: 12px;
            font-weight: bold;
            line-height: 34px;
            text-align: center;
            min-width: 36px;
            text-decoration: none;
            transition: background-color .3s;
        }

        .pagination li.active span {
            background-color: var(--s-primary);
            color: #fff;
        }

        .pagination li a,
        .pagination li span {
            background: #f1f3f5;
            padding: 0 10px;
            color: #111;
            display: block;
            border-radius: 4px;
        }

        :root {
            --s-primary: #ef4a23;
            --s-secondary: #3749bb;
            --s-hf-bg: #081621;
            --s-b-bg: #f2f4f8;
            --s-m-bg: #6e2594;
            --s-s-bg: rgba(55, 73, 187, .1);
            --s-f-c1: #666;
            --s-f-c2: #fff;
        }

        .pagination li a,
        .pagination li span {
            background: #f1f3f5;
            padding: 0 10px;
            color: #111;
            display: block;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
            color: var(--s-primary);
        }

        .text-right {
    text-align: right;
}

@media (min-width: 768px)
.col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
.bottom-bar p {
    font-size: 14px;
    line-height: 34px;
    color: #111;
    margin: 0;
}

p {
    margin-bottom: 10px;
    font-size: 15px;
    color: #01132d;
    line-height: 26px;
}
  .col-md-6 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
    </style>

    <div class="bottom-bar">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <ul class="pagination">
                    <li><span class="disabled hover:bg-[#ef4a23] hover:text-[#fff] active:bg-[#ef4a23] active:text-[#fff]">PREV</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="tablet-pc4658.html?page=2">2</a></li>
                    <li><a href="tablet-pc9ba9.html?page=3">3</a></li>
                    <li><a href="tablet-pcfdb0.html?page=4">4</a></li>
                    <li><a href="tablet-pcaf4d.html?page=5">5</a></li>
                    <li><a href="tablet-pc4658.html?page=2">NEXT</a></li>
                </ul>
            </div>
            <div class="col-md-6 rs-none text-right">
                <p>Showing 1 to 20 of 84 (5 Pages)</p>
            </div>
        </div>
    </div>

</div>
