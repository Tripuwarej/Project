
// vite.config.js
import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue({
            template: {
              compilerOptions: {
                // treat all tags with a dash as custom elements
                isCustomElement: (tag) => tag.includes('-')
              }
            }
          }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
