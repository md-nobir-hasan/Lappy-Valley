<div>
    <style>
      .image-container {
        position: relative;
        width: 500px; /* Adjust the width as needed */
        height: 500px; /* Adjust the height as needed */
        overflow: hidden;
      }
      .image-container:hover .hover-image {
      transform:scale(10.2); /* Adjust the values as needed */
      overflow: hidden;
    }
  
      .hover-image {
        position: absolute;
        top: 0;
        left: 0;
        transition: transform 0.3s ease-in-out;
      }
    </style>
  <div class="image-container" id="imageContainer">
    <img src="/storage/product/large-size-laptop.jpg" alt="Your Image" class=" hover:scale-100 hover-image" id="hoverImage">
  </div>
  
  <script>
    const imageContainer = document.getElementById('imageContainer');
    const hoverImage = document.getElementById('hoverImage');
  
    imageContainer.addEventListener('mousemove', (e) => {
      const { offsetX, offsetY } = e;
      const { width, height } = imageContainer.getBoundingClientRect();
      const xPercentage = (offsetX / width - 0.2) * 2; // Normalize to -1 to 1
      const yPercentage = (offsetY / height - 0.2) * 2; // Normalize to -1 to 1
  
      const moveX = -xPercentage * 40; // Adjust the multiplier as needed
      const moveY = -yPercentage * 40; // Adjust the multiplier as needed
  
      hoverImage.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });
  
    imageContainer.addEventListener('mouseleave', () => {
      hoverImage.style.transform = 'scale';
    });
  </script>
</div>