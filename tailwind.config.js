/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            navbar: '#232222',
            orange: '#FF4D08',
            white: '#FFFFFF',
            red: '#DE2626',
            phon: '#EEEEEE',
            gray: '#00000080',
        },
        extend: {},
    },
    plugins: [],
}