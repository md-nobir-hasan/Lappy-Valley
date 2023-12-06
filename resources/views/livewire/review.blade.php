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
{{-- <div class="container mx-auto">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <style>
    .container {
	width:980px;
	margin:100px auto 0 auto;
	font-family:arial;
}

ul, li {
	margin:0;
	padding:0;
}

.resmenu {
	display:none;
}

.menu li {
	display: inline-block;
	position: relative;
}
.menu li a {
	font-size: 14px;
	text-transform: uppercase;
	color: #3b2612;
	padding: 6px 17px;
	letter-spacing: 1px;
	display: block;
	text-decoration: none;
}
.menu li:hover a {
	background: #444;
	color: #fff !important;
}


.menu li ul {
	position: absolute;
	width: 250px;
	z-index: 5;
	left: 0px;
	top:28px;
	display:none;
	
}
.menu li:hover ul {
	display:block;
}
.menu li ul li {
	display: block;
}

.menu li ul li a {
	padding: 6px 17px;
	transition: all 0.2s;
	text-transform: capitalize;
}
.menu li ul li a:hover {
	background: #000;
}


/*--- responsive ----*/
@media screen and (max-width:768px) {

.resmenu {
	color: #fff !important;
	display: block;
	text-decoration: none !important;
	background: #6ca2bd;
	padding: 5px 10px;
}
.menu {
	display: none;
	background: #444444;
}
.menu li {
	position: relative;
	display: block;
}
.menu li a {
	color: #fff;
	font-size:14px;
	padding: 6px 17px;
}
.menu li a:hover {
	background-color: #000;
	color: #000;
	transition: all 0.3s;
}
.active_submenu {
	background-color: #ceb689 !important;
	color: #fff !important;
}

.menu li ul {
	display: none;
	width: 100%;
	position: relative;
	top: 0px;
	display:none;
	
}
.menu li:hover ul {
	display: none;
	top: 0px;
}
	
.menu li a.active {
	color: #fff;
	font-family: 'opensanssemibold';
}
	
.menu li ul li a {
	background:#333;
}


}
  </style>
  <div class="container">
     <div class="btm_header">
               <a href="javascript:void();" class="resmenu">Menu</a>
         
          <ul class="menu">
            <li><a href="#">Menu</a></li>
            <li><a href="javascript:void(0);" class="submenu">Dropdown One  <span></span></a>
              <ul class="dropdown">
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
              </ul>
            </li>
            <li><a href="javascript:void(0);" class="submenu">Dropdown Two <span></span></a>
          <ul class="dropdown">
          <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
          </ul>
            </li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Menu</a></li>
          </ul>
            </div>
  </div>

  <script>
    $(document).ready(function(){
	 	$(".resmenu").click(function(){
	 		$(".menu").slideToggle();
	 	}); 

	 	$(".submenu").click(function(){
	 		$(this).toggleClass("active_submenu");
	 		$(this).parent().find(".dropdown").slideToggle();
	 	}); 

	 });
  </script>
</div> --}}


<div>
  <style>
    body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.menu-toggle {
  cursor: pointer;
  padding: 15px;
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 2;
}

.bar {
  width: 30px;
  height: 3px;
  background-color: #fff;
  margin: 6px 0;
  transition: 0.4s;
}

.menu {
  position: fixed;
  top: 0;
  left:0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  z-index: 1;
  overflow: hidden;
  transition: 0.5s;
}
.menu.active {
  left: 0;
}

.menu ul {
  list-style: none;
  padding: 0;
  margin: 100px 0 0 0;
  text-align: center;
  display: none; /* Initially hide the ul */
}

.menu li {
  padding: 20px;
}

.menu a {
  text-decoration: none;
  color: #fff;
  font-size: 18px;
}

.menu-toggle.active .bar:nth-child(1) {
  transform: rotate(-45deg) translate(-7px, 6px);
}

.menu-toggle.active .bar:nth-child(2) {
  opacity: 0;
}

.menu-toggle.active .bar:nth-child(3) {
  transform: rotate(45deg) translate(-7px, -6px);
}



.menu.active ul {
  display: block; /* Show the ul when the menu is active */
}

  </style>
  <div class="menu-toggle" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
  <div class="menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <script>
      var menuToggle = document.querySelector('.menu-toggle');
      var menued = document.querySelector('.menu');

    function toggleMenu() {
      menued.classList.toggle('active');
      menuToggle.classList.toggle('active');
    }

  </script>
</div>
