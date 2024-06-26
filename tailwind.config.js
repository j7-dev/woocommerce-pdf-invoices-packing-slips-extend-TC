/** @type {import('tailwindcss').Config} */
// eslint-disable-next-line no-undef
module.exports = {
  corePlugins: {
    preflight: false,
  },

  // prefix: 'tw-',

  content: ['./js/src/**/*.{js,ts,jsx,tsx}', './inc/**/*.php'],
  theme: {
    extend: {
      colors: {
        primary: '#1677ff',
      },
      screens: {
        sm: '576px', // iphone SE
        md: '810px', // ipad 直向
        lg: '1080px', // ipad 橫向
        xl: '1280px', // mac air
        xxl: '1440px',
      },
    },
  },
  plugins: [],
  safelist: [],
}
