/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        background: "#f0f9ff",
        primary: "#0284c7",
        secondary: "#22d3ee",
        transparant: "#cbd5e1",
        darktransparant: "#64748b",
        dark: "#1e293b",
      },
      fontFamily: {
        sans: ['InterVariable', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

