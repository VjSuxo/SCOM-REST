import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/estilo_inicio.css',
                'resources/css/estilo_registroAdm.css',
                'resources/js/app.js',
                'resources/js/registroAdm.js',
            ],
            refresh: true,
        }),
    ],
});
