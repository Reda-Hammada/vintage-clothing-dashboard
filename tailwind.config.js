/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {

    extend: {
        colors:{
            'nav-color':'#525A65',
            'hov-color':'#5C6879',
            'main-color':'#5A5A5A',
            'grery-bg-color':'#F7F8FA',
        },
        fontFamily: {
            'poppins': ['Poppins', 'sans-serif']

        }
    },

  },
  plugins: [],
}
