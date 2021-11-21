module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    colors:{
      primary:'#0E1117', /* black shade 0e0e10 */
      mid: '#20242c',
      secondary:'#FBBF24', /* yellow shade FBBF24*/
      hover:'#e4db5c',
      other:'#E5E7EB', /* white shade */
      tertiary: '#F8FAFC',
   
      transparent: 'transparent',
      current: 'currentColor',
    },
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
