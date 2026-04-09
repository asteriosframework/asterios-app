/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./views/**/*.twig"
    ],
    theme: {
        extend: {
            colors: {
                primary: "#0d6efd",
                secondary: "#20c997",
                text: "#1d1d1f",
                muted: "#6e6e73",
                bg: "#f5f5f7"
            },
            fontFamily: {
                sans: ["Inter", "sans-serif"]
            },
            boxShadow: {
                card: "0 20px 40px rgba(0,0,0,0.05)",
                "card-hover": "0 30px 60px rgba(0,0,0,0.08)"
            },
            borderRadius: {
                xl2: "20px"
            }
        }
    },
    plugins: []
}