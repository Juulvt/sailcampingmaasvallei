import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      colors: {
        primarybutton: '#2F44CB',
        primarybuttonhover: '#0016A1',
        secondarybutton: '#2B2F40',
        secondarybuttonhover: '#0E1226',
        primary: '#2F44CB',
        default: '#2B2F40',
        secondary: '#3F4780'
       },
      backgroundColor: {
        'defaultbg': '#EFF1F6',
        'secondarybg': '#E5E8F5',
        'nav': '#FFFFFF',
      },
    },
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
    },
  },

    plugins: [forms],
};
