const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
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
                'Emerald': {
                    100: "#ccdcdc",
                    200: "#99b9b9",
                    300: "#669795",
                    400: "#337472",
                    500: "#00514f",
                    600: "#00413f",
                    700: "#00312f",
                    800: "#002020",
                    900: "#001010",
                },
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
