import laravel from 'laravel-vite-plugin'
import {defineConfig} from 'vite'

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/web.css',
            'resources/js/site.js',
        ]),
    ],
});
