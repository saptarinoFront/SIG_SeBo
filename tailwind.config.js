/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#4BA586",
                title: "#054457",
                text: "#73788C",
                "dark-primary": "#519980",
            },
            fontFamily: {
                poppins: "'Poppins', sans-serif",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
