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
                "palmiak-font": ['"Plus Jakarta Sans"', "sans-serif"],
                "palmiak-font-serif": ['"Martel"', "serif"],
            },

            colors: {
                palmiak_pink: "#FA8BFF",
                palmiak_blue: "#2BD2FF",
                palmiak_green: "#2BFF88",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
