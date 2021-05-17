module.exports = {
  darkMode: 'media',
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      colors: {
        discord: '#7289DA',
        linkedin: '#0077B5',
        github: '#181717',
        twitter: '#1DA1F2',
        telegram: '#26A5E4',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
