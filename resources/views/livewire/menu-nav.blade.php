  <nav
      class="px-3 py-3 flex justify-between items-center bg-[#F2F2F2] font-[jost] font-[500] text-[14px] text-[#380D37] rounded-[6px]">
      <div class="">
          <h1>Brand New</h1>
      </div>

      <div class="flex justify-between text-center items-center gap-[10px] font-[jost] font-[500] text-[17px]">
          <style>
              .dropdown {
                  position: relative;
                  /* top: 50px;
                  left: 45%; */
                  /* margin-top: 15px; */
                  width: 300px;
                  height: 50px;
              }

              .dropdown::before {
                  content: "";
                  position: absolute;
                  top: 15px;
                  right: 20px;
                  z-index: 1000;
                  width: 8px;
                  height: 8px;
                  border: 2px solid #333;
                  border-top: 2px solid #fff;
                  border-right: 2px solid #fff;
                  transform: rotate(-45deg);
                  transition: 0.5s;
                  pointer-events: none;
              }

              .dropdown.active::before {
                  top: 22px;
                  transform: rotate(-225deg);
              }

              .dropdown input {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  cursor: pointer;
                  background: #fff;
                  font-size: 1.2em;
                  border: none;
                  outline: none;
                  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
                  padding: 12px 20px;
                  /* border-radius: 10px; */
                  align-items: center;
              }

              .dropdown .options {
                  position: absolute;
                  top: 50px;
                  width: 100%;
                  background: #fff;
                  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
                  /* border-radius: 10px; */
                  overflow: hidden;
                  display: none;
                  z-index: 10000;
              }

              .dropdown.active .options {
                  display: block;
              }

              .dropdown .options div {
                  padding: 12px 20px;
                  cursor: pointer;
              }

              .dropdown .options div:hover {
                  background: #62baea;
                  color: #fff;
              }
          </style>
          <div class="dropdown font-[jost] font-[400] text-[14px] text-[#380D37] text-left">
              <input class="text-box" type="text" placeholder="Defaul sorting" readonly>
              <div class="options">
                  <div onclick="show('Default sorting')">Default sorting</div>
                  <div onclick="show('Sort by popularity')">Sort by popularity</div>
                  <div onclick="show('Sort by average rating')">Sort by average rating</div>
                  <div onclick="show('Sort by latest')">Sort by latest</div>
                  <div onclick="show('Sort by price:low to high')">Sort by price:low to high</div>
                  <div onclick="show('Sort by price: high to low')">Sort by price: high to low</div>
              </div>
          </div>
          <div
              class="shop-view text-[#380D37] text-[14px] font-[jost] font-[400] leading-[20.23px]  mx-[20px] flex items-center justify-center transparent">
              <span class='text-center'>View</span>
              <a href="#" class="grid-view mf-shop-view current mx-[20px]" data-view="grid">
                  <svg xmlns="http://www.w3.org/2000/svg" height="2em" fill='black' viewBox="0 0 512 512"><!--!
        Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license
        (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                          d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64
        64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm88 64v64H64V96h88zm56 0h88v64H208V96zm240 0v64H360V96h88zM64
        224h88v64H64V224zm232 0v64H208V224h88zm64 0h88v64H360V224zM152 352v64H64V352h88zm56 0h88v64H208V352zm240 0v64H360V352h88z" />
                  </svg></a>
              <a href="#" class="list-view mf-shop-view mx-[20px]" data-view="list">
                  <svg xmlns="http://www.w3.org/2000/svg" height="2em" fill='black'
                      viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                          d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                  </svg>
              </a>
          </div>
      </div>
      <script>
          function show(value) {
              document.querySelector(".text-box").value = value;
          }

          let dropdown = document.querySelector(".dropdown")
          dropdown.onclick = function() {
              dropdown.classList.toggle("active")
          }
      </script>

  </nav>
