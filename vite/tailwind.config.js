/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['../**/*.php'],
	theme: {
		container: {
			center: true,
			padding: '1rem'
		},
		extend: {}
	},
	plugins: [require('@tailwindcss/typography')]
}
