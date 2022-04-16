module.exports = {
  content: [
    "./modules/Product/Views/*.php",
    "./modules/Product/Views/**/*.php",
    "./modules/User/Views/*.php",
    "./modules/User/Views/**/*.php",
  ],
  theme: {
    extend: {
      borderWidth: {
      DEFAULT: '1px',
      '0': '0',
      '2': '2px',
      '3': '3px',
      '4': '4px',
      '6': '6px',
      '8': '8px',
    },
      fontSize: {
        xxs: ['10px', '12px']
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
      }
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}