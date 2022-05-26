const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')


module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'm': '#EC008C',
            'c': '#00AEEF',
            'y': '#FFF200',
            'k': '#000000',
            'white': '#ffffff',
            colors,
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
