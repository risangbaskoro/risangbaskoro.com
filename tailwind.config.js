colors = require('tailwindcss/colors')

module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.{blade.php,blade.md,md,html,vue}',
        '!source/**/_tmp/*' // exclude temporary files
    ], {dot: true}),
    theme: {
        fontFamily: {
            'handwriting': ['"Indie Flower"', 'cursive'],
            'sans': ['"Open Sans"', 'sans-serif'],
            'serif': ['"Playfair Display"', 'serif'],
        },
        extend: {
            colors: {
                'dark': colors.stone,
                'primary': colors.amber,
            },
            aspectRatio: {
                "postImage": "16/4"
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
