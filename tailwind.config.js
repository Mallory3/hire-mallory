module.exports = {
  purge: [],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        coral: 'rgb(241,83,46)'
      },
    },
  },
  variants: {
    extend: {
      animation: ['hover', 'group-hover']
    },
  },
  plugins: [],
}
