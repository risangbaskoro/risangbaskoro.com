module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.{blade.php,blade.md,md,html,vue}',
        '!source/**/_tmp/*' // exclude temporary files
    ], {dot: true}),
    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        li: {
                            marginTop: '0',
                            marginBottom: '0',
                        },
                        p: {
                            marginTop: '0',
                            marginBottom: '0',
                        },
                        h1: {
                            marginTop: '0',
                            marginBottom: '0.100rem',
                        },
                        h2: {
                            marginTop: '0',
                            marginBottom: '0.250rem',
                        },
                        img: {
                            marginTop: '0',
                            marginBottom: '0',
                        },
                        pre: {
                            marginTop: '0.100rem',
                            marginBottom: '0.100rem',
                        },
                    },
                },
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
