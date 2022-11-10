import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sss/sss.css',
                'resources/sss/sss.js',
                'resources/css/estilo_tarjetaPlatillos.css',
                'resources/sass/app.scss',
                'resources/css/estilo_inicio.css',
                'resources/css/estilo_registroAdm.css',
                'resources/css/estilo_nosotros.css',
                'resources/css/estilo_preguntas.css',
                'resources/css/estilo_login.css',
                'resources/css/estilo_comentario.css',
                'resources/css/estilo_menu.css',
                'resources/css/estilo_imgDiagonal.css',
                'resources/css/estilo_tarjetasFlip.css',
                'resources/js/app.js',
                'resources/js/registroAdm.js',
                'resources/js/preguntas.js',
            ],
            refresh: true,
        }),
    ],
});
