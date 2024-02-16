import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
import inject from "@rollup/plugin-inject";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/admin/sass/app.scss',
                'resources/admin/js/app.js',
                'resources/customer/css/app.css',
                'resources/customer/js/app.js',
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: false,
        }),
        // inject({
        //     $: 'jquery',
        //     jQuery: 'jquery',
        // }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '@admin_js': path.resolve(__dirname, 'resources/admin/js'),
        }
    },
});
