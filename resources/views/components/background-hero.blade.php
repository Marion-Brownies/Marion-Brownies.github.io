
<!-- Background Animation -->
<div class="area lg:h-screen h-full w-full absolute z-[-1]">
  <ul class="circles relative w-full h-[96%] overflow-hidden">
    <li class="absolute bg-skyBlue bg-opacity-50 w-[80px] h-[80px] bottom-[-150px] left-[25%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[20px] h-[20px] bottom-[-150px] left-[10%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[20px] h-[20px] bottom-[-150px] left-[70%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[60px] h-[60px] bottom-[-150px] left-[40%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[20px] h-[20px] bottom-[-150px] left-[65%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[110px] h-[110px] bottom-[-150px] left-[75%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[150px] h-[150px] bottom-[-150px] left-[35%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[25px] h-[25px] bottom-[-150px] left-[50%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[15px] h-[15px] bottom-[-150px] left-[20%] animate-animate"></li>
    <li class="absolute bg-skyBlue bg-opacity-50 w-[150px] h-[150px] bottom-[-150px] left-[85%] animate-animate"></li>
  </ul>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const circles = document.querySelectorAll('.circles li');

  circles.forEach(circle => {
    // Generate a random delay between 0s and 10s
    const randomDelay = Math.random() * 10;
    // Set a random delay for each circle
    circle.style.animationDelay = `${randomDelay}s`;
  });
});
</script>
