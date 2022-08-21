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
                palmiak_pink: "#FA8BFF",
                palmiak_blue: "#2BD2FF",
                palmiak_green: "#2BFF88",
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
    ],
};
