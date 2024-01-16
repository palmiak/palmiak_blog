module.exports = {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./content/**/*.md",
    ],
    theme: {
        extend: {
            fontFamily: {
                "palmiak-font": ['"Montserrat"', '"Montserrat override"', "serif"],
                "palmiak-font-title": ['"Unbounded"', '"Unbounded override"', "serif"],
                "palmiak-font-serif": ['"JetBrainsMono"', '"JetBrainsMono override"', "serif"],
            },

            colors: {
                "palmiak_pink": "#F027A6",
                "palmiak_blue": "#16E6F3",
                "palmiak_green": "#A05FE0",
                "palmiak_bg": "#100F15",
                "palmiak_lightdark": "#231F52",
                "palmiak_deepdark": "#0F0E14"
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
