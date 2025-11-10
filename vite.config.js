import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        vue(), // write this for vuej
        laravel({
            input: [
                'resources/scss/frontend/app.scss', 'resources/js/frontend/app.js'
                , 'resources/scss/backend/app.scss', 'resources/js/backend/app.js'
                , 'resources/scss/global/app.scss', 'resources/js/global/app.js'
            ]
            , refresh: true
        , })
    , ]
, });