/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      lineHeight: {
      '80%': '80%', // p-80% - should work
    }
    },
  },
  plugins: [],
}
