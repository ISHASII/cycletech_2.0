import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "hulk" : "rgba(0, 130, 84, 1)",
                "old-hulk": "#005637",
                "gray" : "#69737D",
                "birumuda" : "#EEF7FF",
                "krem" : "#FFF7EA",
                "hijau" : "#008254", 
            },
            backgroundImage: {
                'hero': "url('../public/images/tentangkami.png')",
              },
        },
    },
    plugins: [],
};
