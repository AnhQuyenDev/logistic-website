/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./node_modules/flowbite/**/*.js",
    "./**/*.html",
    "./src/**/*.{js,ts,jsx,tsx,html}", // quét file Tailwind
  ],
  theme: {
    extend: {
      colors: {
        primary: "#d23708",
        "primary-dark": "#A60D26",
        "primary-darker": "#7F0A1F",
        "primary-light": "#f17223",
        "primary-lighter": "#FFF5F5",
        "primary-hover": "#E11B3C",
        "primary-contrast": "#FFFFFF",

        accent: "#F97316",
        "accent-dark": "#EA580C",
        "accent-light": "#FED7AA",
      },
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
      },
    },
  },
  plugins: [
    require('tailwind-scrollbar-hide'),
    require('flowbite/plugin')
  ],
};
