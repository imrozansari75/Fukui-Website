/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.php','accounting.html','procurement.html'],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('./assets/job-5382501.jpg')",
      },
      colors: {
        'primary': '#3238f2',
      },
      fontFamily: {
        'display': ['Poppins', 'sans-serif'],
        'body': ['Inter', 'sans-serif']
      }
    },
  },
  plugins: [],
}

