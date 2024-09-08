<x-layout>
    @vite('resources/css/app.css')

    <!-- Background Animation -->
    <x-background-hero></x-background-hero>

    <!-- Hero Section -->
    <section id="home" class="lg:min-h-screen h-auto pb-10 flex flex-col lg:flex-row justify-between items-center text-center lg:text-left px-4 lg:px-24 pt-24 lg:pt-32 relative z-10">
        <!-- Text on Left -->
        <div class="lg:w-1/2 lg:text-left mb-8 lg:mb-0">
            <h1 class="text-4xl font-bold text-skyBlue">Hi, I am Satrio Wicaksono 
                <span class="inline-block animate-wave">👋</span>
            </h1>
            <div class="mt-4 text-2xl text-skyBlue">
                <p class="text-2xl text-black flex-row items-center">
                    Oh! <span id="typewriter" class="mt-4 text-2xl text-skyBlue"></span>
                    <span class="text-lg animate-blink text-skyBlue mb-2">|</span>
                </p>
            </div>
            <p class="mt-4 text-lg  text-gray-600">I'm passionate about building web applications and learning new technologies.</p>
            <!-- Social Media Links -->
            <div class="mt-5 flex lg:justify-start justify-center space-x-4">
                <!-- GitHub -->
                <a href="https://github.com/Marion-Brownies" target="_blank" class="text-skyBlue hover:text-blue-500">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub" class="w-8 h-8">
                </a>
                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/-" target="_blank" class="text-skyBlue hover:text-blue-500">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" class="w-8 h-8">
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/rio_mario56?igsh=anFscmswMWd5d3hs" target="_blank" class="text-skyBlue hover:text-pink-500">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="w-8 h-8">
                </a>
                <!-- TikTok -->
                <a href="https://tiktok.com/@senryukenq" target="_blank" class="text-skyBlue hover:text-black">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/a/a9/TikTok_logo.svg/500px-TikTok_logo.svg.png?20200425054443" alt="TikTok" class="w-18 h-8">
                </a>
            </div>
            <!-- Button to Say Hi -->
            <a href="#faq" class="inline-block px-4 py-2 mt-5 text-white bg-skyBlue font-medium rounded-md hover:bg-blue-400 hover:scale-110 transition-transform">Learn More</a>
        </div>

        <!-- Photo on Right -->
        <div class="relative w-64 h-64 lg:w-80 lg:h-80 overflow-hidden rounded-full border-4 bg-blue-800 border-skyBlue shadow-lg">
            <img src="http://www.asbam.wuaze.com/assets/img/foto/satrio%206.jpg" alt="Profile Picture" class="object-cover w-full h-full animate-fadeIn">
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="h-auto pb-30 lg:pb-0 lg:h-[450px] -mt-20 flex flex-col justify-between items-center text-center lg:text-left px-4 lg:px-24 pt-24 lg:pt-32 relative z-10">
        <!-- Background Animation -->
        <div class="bg-skyBlue w-full h-full absolute z-[-1] -mt-5">
            <ul class="relative w-full h-full overflow-hidden">
                <!-- Floating Circles -->
                <li class="absolute list-none bg-white bg-opacity-20 animate-rotate rounded-lg bottom-[-200px] left-[10%] w-[300px] h-[300px]"></li>
                <li class="absolute list-none bg-white bg-opacity-20 animate-rotateBack rounded-lg top-[-200px] right-[10%] w-[300px] h-[300px]"></li>
            </ul>
        </div>

        <!-- Header Text -->
        <div class="w-full flex flex-col items-center justify-center text-white text-3xl mb-10">
            <h1>Who Am I</h1>
            <span class="ml-2 text-sm lg:text-lg">A Front End Web Developer And Now Learning About Backend, This Is What Languages I Use</span>
        </div>

        <!-- Skill Icons Section -->
        <div class="w-full grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-8 place-items-center mb-10">
            <!-- Top Row Skills -->
            <div class="flex flex-col items-center">
                <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Icon" class="w-16 h-16 animate-wave">
                <p class="mt-2 text-lg text-white">Laravel</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML Icon" class="w-16 h-16 animate-wiggle">
                <p class="mt-2 text-lg text-white">HTML</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS Icon" class="w-16 h-16 animate-bounce">
                <p class="mt-2 text-lg text-white">CSS</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP Icon" class="w-16 h-16 animate-shake">
                <p class="mt-2 text-lg text-white">PHP</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" alt="Tailwind Icon" class="w-16 h-16 animate-float">
                <p class="mt-2 text-lg text-white">Tailwind</p>
            </div>
            <div class="flex flex-col items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Mysql.svg" alt="MySQL Icon" class="w-16 h-16 animate-rotateBack">
                    <p class="mt-2 text-lg text-white">MySQL</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Postgresql_elephant.svg/540px-Postgresql_elephant.svg.png" alt="PostgreSQL Icon" class="w-16 h-16 animate-scale">
                    <p class="mt-2 text-lg text-white">PostgreSQL</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Figma-logo.svg/400px-Figma-logo.svg.png" alt="Figma Icon" class="w-14 h-16 animate-pulse">
                    <p class="mt-2 text-lg text-white">Figma</p>
                </div>
        </div>

        <!-- Pyramid Layout for Additional Skills -->
        <div class="w-full flex flex-col items-center gap-8">
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">
                <!-- Second Row Skills -->
              
            </div>
        </div>
    </section>

    <!-- Typewriter Effect Script -->
    <script>
        const words = ["I'm An Early Web Developer!", "I Want To Be Fullstack Developer","Ini Web Belum Selesai wkwkw Males","Teamwork Makes The Dream Works"];
        let i = 0;
        let j = 0;
        let currentWord = "";
        let isDeleting = false;

        function type() {
            currentWord = words[i];
            if (isDeleting) {
                document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
                j--;
                if (j == 0) {
                    isDeleting = false;
                    i++;
                    if (i == words.length) {
                        i = 0;
                    }
                }
            } else {
                document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
                j++;
                if (j == currentWord.length) {
                    isDeleting = true;
                }
            }
            setTimeout(type, 100);
        }

        type();
    </script>
</x-layout>
