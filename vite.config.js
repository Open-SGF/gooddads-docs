import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import react from '@vitejs/plugin-react'
import path from 'node:path'

export default defineConfig({
	plugins: [
		laravel({
			input: 'resources/js/app.tsx',
			ssr: 'resources/js/ssr.tsx',
			refresh: true,
		}),
		react(),
	],
	resolve: {
		alias: [
			{
				find: '@',
				replacement: path.resolve(__dirname, 'resources/js'),
			},
		],
	},
})
