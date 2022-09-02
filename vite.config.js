import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        VitePWA({
            registerType: 'autoUpdate',
            devOptions: {
                enabled: true
            },
            workbox: {
                clientsClaim: true,
                skipWaiting: true
            },
            injectRegister: 'auto',
            manifest: {
                name: 'Bouff',
                short_name: 'Bouff',
                description: 'Application de livraison à domicile de nourriture',
                theme_color: '#f39719',
                icons: [
                    {
                        src: 'assets/logo/bouff-192x192.png',
                        sizes: '192x192',
                        type: 'image/png'
                    },
                    {
                        src: 'assets/logo/bouff-512x512.png',
                        sizes: '512x512',
                        type: 'image/png'
                    }
                ]
            }
        }),
    ],
    ssr: {
        noExternal: ['@inertiajs/server'],
    }
});
