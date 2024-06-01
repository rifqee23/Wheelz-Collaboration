/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      container: {
        center: true
      },
      padding: {
        'colon' : '2.2rem',
      },
      boxShadow: {
        '3xl': 'inset 0 5px 10px 0 rgba(0, 0, 0, 0.3)',
      },
      colors : {
        'primary' : '#162345',
        'secondary' : '#2661F8',
        'btncol' : '#27AE60',
        'card' : '#363638',
        'third' : '#A4A2A2',
        'fourth' : '#B3B0B0',
        'rate' : '#7DEDFC',
        'input': '#D9D9D9',
        'form' : '#455265',
        'formbtn' : '#11385C'
      },
      width : {
        '1400' : '2000px',
      },
      padding : {
        '13' : '3.5rem',
        '21' : '5.25rem',
        '22' : '5.5rem',
        '23' : '5.75rem',

      }
    },
  },
  plugins: [require('preline/plugin')],
}

