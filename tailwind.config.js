/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Bebas: "Bebas Neue",
        Manrope: "Manrope",
      },
      height: {
        128: " calc(100% + 28px)",
      },
    },
  },
  plugins: [],
};
