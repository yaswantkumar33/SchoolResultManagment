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
                playwrite: ["Playwrite GB S", "cursive"],
                Arimo: ["Arimo", "sans-serif"],
            },
        },
    },
    plugins: [],
};
