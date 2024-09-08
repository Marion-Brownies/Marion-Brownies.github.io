<div x-data="{ open: false, activeSection: '' }" @scroll.window="activeSection = document.elementFromPoint(window.innerWidth / 2, 80).id" class="fixed top-0 w-full bg-skyBlue shadow-lg px-4 py-4 flex justify-between items-center z-50">
    <div class="text-xl font-bold text-white">Fun Introduce Website</div>
    <nav>
        <ul class="hidden lg:flex space-x-6 text-lg text-white">
            <li :class="{'text-white animate-bounce': activeSection === 'home'}">
                <a href="#home" class="hover:text-sky-700 transition">Home</a>
            </li>
            <!-- <li :class="{'text-white animate-bounce': activeSection === 'projects'}"> -->
                <!-- <a href="#projects" class="hover:text-sky-700 transition">Projects</a>
            </li>
            <li :class="{'text-white animate-bounce': activeSection === 'contact'}">
                <a href="#contact" class="hover:text-sky-700 transition">Contact</a>
            </li> -->
        </ul>
        <button @click="open = !open" class="lg:hidden">
            <svg class="w-6 h-6" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>
    <!-- Mobile Menu -->
    <div x-show="open" class="absolute bg-white w-full left-0 top-16 shadow-lg lg:hidden">
        <ul class="flex flex-col items-center space-y-4 py-4">
            <li><a href="#home" class="hover:text-skyBlue">Home</a></li>
            <!-- <li><a href="#projects" class="hover:text-skyBlue">Projects</a></li>
            <li><a href="#contact" class="hover:text-skyBlue">Contact</a></li> -->
        </ul>
    </div>
</div>
