/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        bilbo : ['Bilbo Swash Caps', 'cursive'],
        montserrrat : ['Montserrat', 'sans-serif']
      }
    },
  },
  plugins: [],
}

