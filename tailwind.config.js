/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  variant: {
    display: ['group-hover','group-focus']
  },
  theme: {
    extend: {
    },
  },
  plugins: [],
}
