module.exports = {
  content: [
    "./modules/Product/Views/*.php",
    "./modules/Product/Views/**/*.php",
    "./modules/Product/Views/**/**/*.php",
    "./modules/Product/Views/**/**/**/*.php",
  ],
  theme: {
    extend: {
      fontSize: {xxs: ['10px', '12px']},
      inter: ['Inter', 'sans-serif'],
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}