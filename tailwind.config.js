module.exports = {
  content: [
    "./modules/Product/Views/*.php",
    "./modules/Product/Views/**/*.php",
    "./modules/Product/Views/**/**/*.php",
    "./modules/Product/Views/**/**/**/*.php",
  ],
  theme: {
    extend: {},
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}