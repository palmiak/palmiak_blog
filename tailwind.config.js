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
                "palmiak-font": ['"JetBrainsMono"', "serif"],
                "palmiak-font-serif": ['"JetBrainsMono"', "serif"],
            },

            colors: {
                "palmiak_pink": "#F027A6",
                "palmiak_blue": "#16E6F3",
                "palmiak_green": "#A05FE0",
                "palmiak_bg": "#2b213a"
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
