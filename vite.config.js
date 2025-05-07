import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/office.css', 'resources/js/office.js'],
            refresh: true,
        }),
    ],
});
