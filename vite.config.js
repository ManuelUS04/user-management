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
    server: {
        https: true, // Habilita el servidor HTTPS
    },
    build: {
        publicDir: 'public', // Directorio público de compilación
        manifest: true, // Genera un manifiesto de construcción
        rollupOptions: {
            input: {
                main: './resources/js/app.js',
            },
        },
    },
});
