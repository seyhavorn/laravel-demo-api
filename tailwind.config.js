/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "resources/views/**/*.blade.php",
        "resources/js/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    prefix: 'tw-',
    theme: {
        extend: {
            colors: {
                'dark': '#222222',
            },
            fontFamily: {
                'fa': ["'Font Awesome 6 Free'"],
            },
            screens: {
                '3xl': '1920px',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
