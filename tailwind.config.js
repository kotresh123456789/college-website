/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './public/**/*.html',
  ],
  theme: {
    extend: {
      colors: {
        maroon: '#6B1E1C',
        gold: '#D4A757',
      },
    },
  },
  plugins: [],
};
