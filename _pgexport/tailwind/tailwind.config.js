module.exports = {
  mode: 'jit',
  purge: [
    '../*.html'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'sans': ['Raleway', 'system-ui', 'ui-sans-serif'],
      'display': ['Allerta Stencil', 'ui-sans-serif']
    },
    colors: {
      black: {
        DEFAULT: '#262626'
      },
      white: {
        DEFAULT: '#ebe1d5',
        dark:'#beb7b5'
      },
      grey: {
        DEFAULT: '#808384'
      },
      accent: {
        DEFAULT: '#b73f1c',
        dark: '#8e1400'
      }
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
