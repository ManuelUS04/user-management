// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    base: 'https://user-management-production-d279.up.railway.app/', // Cambia a HTTPS
    server: {
        https: true, // Habilita el servidor HTTPS
    },
});
