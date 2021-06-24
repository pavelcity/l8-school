const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    // mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
						padding: ['hover', 'focus', 'active'],
						listStyleType: ['hover', 'focus', 'active'],
						tableLayout: ['hover', 'focus'],
        },
				listStyleType: {
					none: 'none',
					disc: 'disc',
					decimal: 'decimal',
					square: 'square',
					roman: 'upper-roman',
				}
				
    },

    variants: {
        extend: {
            opacity: ['active'],
						backgroundOpacity: ['active'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
