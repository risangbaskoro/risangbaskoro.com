colors = require('tailwindcss/colors')

module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.{blade.php,blade.md,md,html,vue}',
        '!source/**/_tmp/*' // exclude temporary files
    ], {dot: true}),
    theme: {
        extend: {
            colors: {
                'dark': colors.stone,
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
