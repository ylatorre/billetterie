  import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/billets.css',
                'resources/scss/billets.scss',
                'resources/js/app.js',
                'resources/js/test.js',
                'resources/js/reservation.js',
                'resources/js/recap.js',

            ],
            refresh: true,
        }),
    ],
});
