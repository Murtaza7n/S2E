/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // S2E Logistics Brand Colors - Extracted from Logo
        's2e': {
          'orange': '#FF6B35',        // Vibrant Orange - S2E text and arrow
          'orange-hover': '#E55A2B',  // Darker orange for hover
          'orange-light': '#FF8C66',  // Lighter orange for highlights
          'dark-blue': '#1E3A5F',     // Dark Blue - Globe bands
          'dark-blue-hover': '#152A47', // Darker blue for hover
          'light-gray': '#E5E7EB',    // Light Gray/Silver - Globe bands
          'medium-gray': '#6B7280',   // Medium Gray - LOGISTICS text
          'gray-dark': '#4B5563',     // Darker gray for text
          'gray-light': '#F3F4F6',    // Very light gray for backgrounds
          'white': '#FFFFFF',         // White - Background
        },
        // Override default Tailwind colors with brand colors
        'blue': {
          50: '#F3F4F6',
          100: '#E5E7EB',
          200: '#E5E7EB',
          300: '#E5E7EB',
          400: '#FF8C66',
          500: '#FF6B35',
          600: '#FF6B35',  // Primary action color
          700: '#E55A2B',  // Hover state
          800: '#152A47',  // Dark blue hover
          900: '#1E3A5F',  // Navigation bar
        },
        'gray': {
          50: '#F3F4F6',
          100: '#E5E7EB',
          200: '#E5E7EB',
          300: '#E5E7EB',
          400: '#E5E7EB',
          500: '#6B7280',
          600: '#6B7280',
          700: '#4B5563',
          800: '#4B5563',
          900: '#4B5563',
        },
      },
    },
  },
  plugins: [],
}
