const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                'Emerald': "#00514F",
                'Coral': "#FF9676",
                'GreenWater': "#D0E0C7",
                'SolarYellow': "#FFEB8A",
                'LightBeige': "#FFFCF8",
                'DarkGreen': "#012624",
                'RedCoral': "#BD5333",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [],
};
