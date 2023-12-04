{{-- <div>
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

<script>
  function show(value) {
      document.querySelector(".text-box").value = value;
  }

  let dropdown = document.querySelector(".dropdown")
  dropdown.onclick = function() {
      dropdown.classList.toggle("active")
  }
</script>
</div> --}}

<div>
  <div class="relative" data-te-dropdown-ref>
    <a
      class="flex items-center whitespace-nowrap rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
      href="#"
      type="button"
      id="dropdownMenuButton2"
      data-te-dropdown-toggle-ref
      aria-expanded="false"
      data-te-ripple-init
      data-te-ripple-color="light">
      Dropdown link
      <span class="ml-2 w-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
          class="h-5 w-5">
          <path
            fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </a>
    <ul
      class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
      aria-labelledby="dropdownMenuButton2"
      data-te-dropdown-menu-ref>
      <li>
        <a
          class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
          href="#"
          data-te-dropdown-item-ref
          >Action</a
        >
      </li>
      <li>
        <a
          class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
          href="#"
          data-te-dropdown-item-ref
          >Another action</a
        >
      </li>
      <li>
        <a
          class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
          href="#"
          data-te-dropdown-item-ref
          >Something else here</a
        >
      </li>
    </ul>
  </div>
</div>