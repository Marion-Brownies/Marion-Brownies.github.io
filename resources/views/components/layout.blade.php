<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio - Satrio Wicaksono')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Laravel Vite for Tailwind and custom CSS -->
    @vite('resources/css/app.css')

    <!-- Animations in Tailwind using Script -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        wave: {
                            '0%': { transform: 'rotate(0)' },
                            '10%': { transform: 'rotate(14deg)' },
                            '20%': { transform: 'rotate(-8deg)' },
                            '30%': { transform: 'rotate(14deg)' },
                            '40%': { transform: 'rotate(-4deg)' },
                            '50%': { transform: 'rotate(10deg)' },
                            '60%': { transform: 'rotate(0)' },
                        },
                        blink: {
                            '0%, 100%': { opacity: 1 },
                            '50%': { opacity: 0 },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        animate: {
                            '0%': {
                                transform: 'translateY(0) rotate(0deg)',
                                opacity: '1',
                                borderRadius: '0'
                            },
                            '100%': {
                                transform: 'translateY(-1000px) rotate(720deg)',
                                opacity: '0',
                                borderRadius: '50%'
                            }
                        },
                        rotate: {
                            '0%': { transform: 'rotate(0deg)' },
                            '100%': { transform: 'rotate(720deg)' },
                        },
                        rotateBack: {
                            '0%': { transform: 'rotate(-0deg)' },
                            '100%': { transform: 'rotate(-720deg)' },
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        },
                        shake: {
                            '0%, 100%': { transform: 'translateX(0)' },
                            '25%': { transform: 'translateX(-5px)' },
                            '75%': { transform: 'translateX(5px)' },
                        },
                        flash: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.3' },
                        },
                        scale: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.5)' },
                        },
                        slide: {
                            '0%, 100%': { transform: 'translateX(0)' },
                            '50%': { transform: 'translateX(20px)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    },
                    animation: {
                        blink: 'blink 1s step-end infinite',
                        wave: 'wave 2s infinite',
                        fadeIn: 'fadeIn 0.5s ease-in-out',
                        animate: 'animate 10s linear infinite',
                        rotate: 'rotate 25s linear infinite',
                        rotateBack: 'rotateBack 25s linear infinite',
                        wiggle: 'wiggle 1s ease-in-out infinite',
                        shake: 'shake 0.5s ease-in-out infinite',
                        flash: 'flash 1s ease-in-out infinite',
                        scale: 'scale 2s ease-in-out infinite',
                        slide: 'slide 2s ease-in-out infinite',
                        float: 'float 3s ease-in-out infinite',
                        'spin-slow': 'spin 5s linear infinite',
                        'pulse-fast': 'pulse 0.8s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'shake-slow': 'shake 1.5s ease-in-out infinite',
                    },
                    colors: {
                        skyBlue: '#87CEEB',
                        white: '#FFFFFF',
                    },
                },
            }
        }
    </script>
</head>

<body class="bg-white text-skyBlue font-sans">
    <!-- Header Component -->
    <x-header></x-header>
    
    <!-- Slot for dynamic content -->
    {{ $slot }}

    <!-- Laravel Vite for JavaScript -->
    @vite('resources/js/app.js')
</body>

</html>
