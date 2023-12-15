<div class="px-[100px] mt-[100px]">
<style>
    /* body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
  background-color: #f0f0f0;
} */

.fill-up-btn {
  position: relative;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border: none;
  background: linear-gradient(to right, #380D37, #DC275C);

  color: #fff;
  overflow: hidden;
  z-index: 1;
  border: 
}

.fill-up-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #380D37;
  transform-origin: top;
  transform: scaleY(0);
  transition: transform 0.3s ease-in-out;
  z-index: -1;
}

.fill-up-btn:hover::before {
  transform: scaleY(1);
}
</style>
<div>
    <button class="fill-up-btn">Click me</button>
</div>
</div>