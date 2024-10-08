import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                dark: {
                    body: '#090c10',
                    aside: '#15202b',
                    text: {
                        main: '#cbcbcb',
                    },
                },
                tag:{
                    orange:'#ce984e',
                    termh:'#4e898c',
                }
            },
            screens: {
                'mx': { 'max': '640px' }, // => @media (max-width: 640px) { ... }
            },
           
            fontFamily: {
                sans: ['Rubik', ...defaultTheme.fontFamily.sans],
                ar: ['Tajawal', ...defaultTheme.fontFamily.sans],
                en: ['Rubik', ...defaultTheme.fontFamily.sans],
                display: ['"Readex Pro"', 'sans-serif'],
                arial: ['Arial', 'Helvetica', 'sans-serif'],
                // en: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms, 
        typography,
        // require('flowbite/plugin'),
    ],
};
