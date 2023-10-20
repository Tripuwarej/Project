import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import path from "path";


export default defineConfig({
    base: "/",
    plugins: [
        vue({
            template: {
            transformAssetUrls: {
            base: null,
            includeAbsolute: false,
            },
            },
            }),

        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
        "@/": path.join(__dirname, "/resources/ts/src/"),
        "~": path.join(__dirname, "/node_modules/"),
        },
        },
        build: {
        chunkSizeWarningLimit: 1600,
        },
});
