import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'public/scss/style.scss',
                'resources/js/lightgallery.min.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
