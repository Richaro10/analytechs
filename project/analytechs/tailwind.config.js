/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1E3A8A',
        secondary: '#3B82F6',
        accent: '#D97706',
        neutral: '#374151',
        'footer-bg': '#1A1F2B',
      },
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
        opensans: ['Open Sans', 'sans-serif'],
      },
      keyframes: {
        gradient: {
          '0%, 100%': { transform: 'translate(0, 0)' },
          '50%': { transform: 'translate(30px, 30px)' },
        },
      },
      animation: {
        gradient: 'gradient 3s linear infinite',
      },
      gridTemplateColumns: {
        'footer': 'repeat(4, minmax(0, 1fr))',
      },
    },
  },
  plugins: [],
};