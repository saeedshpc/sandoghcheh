/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php","./resources/**/*.js",],
  theme: {
      screens: {
          xs: "380px",
          sm: "480px",
          tb: "769px",
          md: "768px",
          lg: "976px",
          sml: "1280px",
          xl: "1440px",
          fsc: "1750px",
      },
      extend: {
          fontFamily: {
              sans: ["YekanBakh"],
          },
          colors: {
              greenOne: "#0b9b82",
          },
      },
  },
  plugins: [],
}

