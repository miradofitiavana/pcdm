const path = require('path');
const generatePalette = require(path.resolve(__dirname, ('assets/utils/generate-palette')));

const customPalettes = {
    primary: generatePalette('#2d241e'),
    brand: generatePalette('#eb0000'),
    brandLight: generatePalette('#CAA9A2'),
    secondary: generatePalette('#31333b'),
};

module.exports = {
    content: [
        './**/*.php',
        './assets/js/*.js',
        './assets/scss/**/*.scss',
        './../../plugins/pcdm/src/**/*.js'
    ],
    theme: {
        extend: {
            borderRadius: {
                'container': '10px',
                'button': '16px'
            },
            colors: {
                primary: customPalettes.primary,
                brand: customPalettes.brand,
                'brand-light': customPalettes.brandLight,
                secondary: customPalettes.secondary,
                initial: 'initial',
            },

            fontSize: {
                'inherit': 'inherit'
            },

            minHeight: {
                '48px': '48px'
            },

            height: {
                'inherit': 'inherit'
            },

            lineHeight: {
                'inherit': 'inherit'
            },

            screens: {
                'down-2xl': {'max': '1535px'},
                'down-xl': {'max': '1279px'},
                'down-lg': {'max': '1023px'},
                'down-md': {'max': '767px'},
                'down-sm': {'max': '639px'},
            },
        },
    },
    variants: {
        display: ['group-hover']
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};