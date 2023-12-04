<div class="container ">
  
  <style>
    /* Define default styles for the buttons */
    .default-button {
      background-color: #3498db;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .other-button {
      background-color: #2ecc71;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    } 
  </style>


  <!-- HTML buttons with onclick event -->
  <button class="default-button" onclick="changeBackground()">Default Button</button>
  <button class="other-button" onclick="changeBackground()">Other Button</button>

  <!-- JavaScript to handle button click event and change background color -->
  <script>
    function changeBackground() {
      // Select the default button and change its background color
      var defaultButton = document.querySelector('.default-button');
      defaultButton.style.backgroundColor = '#e74c3c'; // Change to your desired color
    }
  </script>
</div>


