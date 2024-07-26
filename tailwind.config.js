/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                playwrite: ["Cabin", " sans-serif"],
                Arimo: ["Arimo", "sans-serif"],
            },
        },
    },
    plugins: [],
};
