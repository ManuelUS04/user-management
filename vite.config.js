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
            assetUrl: (url) => url.startsWith('/') ? `https://user-management-production-d279.up.railway.app${url}` : url,
        }),
    ],
    server: {
        https: true, // Habilita el servidor HTTPS
    },
});
