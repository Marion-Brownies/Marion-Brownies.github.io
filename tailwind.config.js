
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

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
      },
      animation: {
          wave: 'wave 2s infinite',
      },
      colors: {
          skyBlue: '#87CEEB',
          white: '#FFFFFF',
      },
      },
  },
}

