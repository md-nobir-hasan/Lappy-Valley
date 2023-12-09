<div class="container mx-auto">
  <style>
.custom-btn {
  color: #fff;
  width: 130px;
  height: 40px;
  padding: 10px 25px;
  /* font-family: 'Lato', sans-serif; */
  font-weight: 500;
  /* background: transparent; */
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
  /* background:linear-gradient(#380D37,#DC275C); */
}
.btn-7 {
 /* background: #8ce437; */
  line-height: 40px;
  padding: 0;
  border: none;
  box-shadow: 0 0 5px #8ce437;
}
.btn-7 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-7:hover{
  background: #380D37;
}
.btn-7:before,
.btn-7:after {
  position: absolute;
  content: "";
  height: 0%;
  width: 2px;
  background: #8ce437;
 box-shadow: 0px 0px 5px #8ce437;
}
.btn-7:before {
  right: 0;
  top: 0;
  transition: all 1000ms ease;
}
.btn-7:after {
  left: 0;
  bottom: 0;
  transition: all 1000ms ease;
}
.btn-7:hover:before {
  transition: all 1000ms ease;
  height: 100%;
  background:linear-gradient(#380D37,#DC275C);
}
.btn-7:hover:after {
  transition: all 1000ms ease;
  height: 100%;
  background:linear-gradient(#380D37,#DC275C);
}
.btn-7 span:before,
.btn-7 span:after {
  position: absolute;
  content: "";
  background: #8ce437;
  box-shadow: 0 0 5px #8ce437;
}
.btn-7 span:before {
  left: 0;
  top: 0;
  width: 0%;
  height: 2px;
  transition: all 1000ms ease;
}
.btn-7 span:after {
  right: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  transition: all 1000ms ease;
}
.btn-7 span:hover:before {
  width: 100%;
  /* background:linear-gradient(#380D37,#DC275C); */
}
.btn-7 span:hover:after {
  width: 100%;
  /* background:linear-gradient(#380D37,#DC275C); */
}
  </style>
     <button
     class="custom-btn btn-7 selection:text-[#F2F2F2] relative text-[17px] h-[44px] w-[11px] rounded-[4px] font-[500] font-[jost] mt-[15px] pt-[5px] pr-[30px] pl-[30px] pb-[5px] bg-gradient-to-r from-[#380D37] to-[#DC275C] "
     type="submit">
     <span>Post</span></button>

</div>