import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/app2.css',
                'resources/css/appCaptureData.css',
                'resources/css/appCaptureData.css',
                'resources/css/appMain.css',
                'resources/css/appMedicos.css',
                'resources/css/appSelect-Format.css',
                'resources/css/appHistorial.css',
                'resources/css/appErrorCredenciales.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
