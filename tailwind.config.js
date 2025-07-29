/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx,html}",  // quét file Tailwind
  ],
  theme: {
    extend: {
       colors: {
        primary: "#C8102E",
        "primary-dark": "#A60D26",
        "primary-darker": "#7F0A1F",
        "primary-light": "#FBEAEA",
        "primary-lighter": "#FFF5F5",
        "primary-hover": "#E11B3C",
        "primary-contrast": "#FFFFFF",

        accent: "#F97316",
        "accent-dark": "#EA580C",
        "accent-light": "#FED7AA",

        background: "#FFF1F1",
        "background-dark": "#1F1F1F",
        "text-muted": "#6B7280",
        "text-strong": "#1F1F1F",
      },
    },
  },
  plugins: [],
};
