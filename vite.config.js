// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

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
        https: {
          key: fs.readFileSync('./server.key'),
          cert: fs.readFileSync('./server.cert')
        },
        http2: false // Deshabilita HTTP/2 para que funcione en entornos locales con HTTP
    },
});
