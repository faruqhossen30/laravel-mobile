import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
        'node_modules/preline/dist/*.js',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
              },
            screens: {}
        },
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: '100%', // add required value here
                    }
                }
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand': '#FF003A',
            },
            width: {
                'cal30': 'calc(100% - 30px) !important',
                'cal40': 'calc(100% - 40px) !important',
            },
        },
    },

    plugins: [forms, require('flowbite/plugin'), require('@tailwindcss/typography'),require('preline/plugin'),],
};
