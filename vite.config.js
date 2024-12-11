import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'node:path';



export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: [
                'app/**',
                'resources/views/**',
                'routes/**',
                'config/**'
            ],
        })
    ],
    server: {
        host: 'localhost',
        port: 3000
    },
    resolve: {
        alias: {
            '@': '/resources/js',
            'ziggy': path.resolve('vendor/tightenco/ziggy'),
            '/images': '/resources/images',
            '/videos': '/resources/videos'
        }
    }
});
