/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            height: {
                '50dvh': '50dvh', // Add custom height utility for 80dvh
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('@tailwindcss/line-clamp'),
    ],
};
