import laravel from 'laravel-vite-plugin'
import {defineConfig} from 'vite'
import { FontaineTransform } from 'fontaine';


export default defineConfig({
    plugins: [
        FontaineTransform.vite({
            fallbacks: ['Arial'],
            resolvePath: (id) => new URL(`./resources${id}`, import.meta.url),
        }),
        laravel([
            'resources/css/web.css',
            'resources/js/web.js',
        ]),
    ],
});
