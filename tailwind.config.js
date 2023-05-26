/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",

  ],
  theme: {
    extend: {},
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'white': '#ffffff',
      'purple': '#3f3cbb',
      'midnight': '#121063',
      'metal': '#565584',
      'tahiti': '#3ab7bf',
      'silver': '#ecebff',
      'bubble-gum': '#ff77e9',
      'bermuda': '#78dcca',
      'orange-rim': '#FFA028',
      'rim-active': '#FFA028',
      'rim-normal': '#646260',
      'orange-rim-hover': '#FFAE48',
      'rim-title': '#243C7B',
      'rim-text': '#7B7B7B',
      'rim-white': '#F2F2F2',
    },
    container: {
      center: true,
    },
    fontFamily: {
      'isidora': ['isidora', 'sans-serif'], 
      'skemaprotitle': ['skemaprotitle', 'serif'], 
      'inter': ['inter', 'sans-serif'],
      'aoboshi-one': ['aoboshi one', 'sans-serif'],
      'roboto-slab': ['roboto slab', 'serif'],
      'anek-bangla': ['Anek Bangla', 'sans-serif'],    
    },
  },
  plugins: [
    require('flowbite/plugin'),
  
  ],
 
 
}

