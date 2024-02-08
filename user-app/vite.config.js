import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/livedonorreg.js',
                'resources/js/liverecpreg.js',
                'resources/js/liveroutine.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
