/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,php,js}",
    "./assets/templates/*.{html,php,js}"
  ],
  theme: {
    extend: {
      colors:{
        'azul-claro': '#243cff',
        'azul-oscuro': '#0d1b3e',
      },
      width:{
        '43':'172px',
      },
      spacing:{
        '42':'170px',
      }
    },
  },
  plugins: [],
}

