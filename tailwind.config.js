const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                botany: ["BOTANY", "cursive"],
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                // 'bouffcover': "url('/images/cover.svg')",
            },
            animation: {
                'bounce-slow': 'bounce 5s  infinite',
            },
            colors: {
                bouff: {
                    primaryone: '#f39719',
                    primarytwo: '#ffc988',
                    primarytree: '#ffecd9',
                    primaryfor: '#fffcf9',
                    secondaryone: '#1d1d1b',
                    secondarytwo: '#1b213d',
                    secondarytree: '#49434c',
                }
            },
            screens: {
                xs: '500px',
            }
        }
    },
    //  plugins: [require('@tailwindcss/forms')],
}
