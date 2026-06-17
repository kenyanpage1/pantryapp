import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbitePlugin from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // ADD THIS COMPLETE COLORS MATRIX
            colors: {
                success: {
                    DEFAULT: '#16a34a', // green-600
                    strong: '#15803d',  // green-700
                    medium: '#86efac',  // green-300 (ideal for focus rings)
                },
                danger: {
                    DEFAULT: '#dc2626', // red-600
                    strong: '#b91c1c',  // red-700
                    medium: '#fca5a5',  // red-300
                },
                warning: {
                    DEFAULT: '#d97706', // amber-600
                    strong: '#b45309',  // amber-700
                    medium: '#fde047',  // yellow-300
                },
                dark: {
                    DEFAULT: '#1f2937', // gray-800
                    strong: '#111827',  // gray-900
                },
                neutral: {
                    primary: '#ffffff',
                    secondary: {
                        DEFAULT: '#f9fafb', // gray-50
                        medium: '#f3f4f6',  // gray-100 (used for your Ghost button hover)
                    },
                    tertiary: '#d1d5db',    // gray-300 (used for your Dark/Ghost focus rings)
                },
                // Custom text styling definition requested by your Ghost button
                heading: '#111827', // deep dark gray-900 for readable text
            },
        },
    },


    plugins: [
        forms,
        flowbitePlugin
    ],
};
