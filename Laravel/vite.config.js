import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            publicDirectory: "../public_html",
            input: [
                // CSS
                "resources/css/app.css",
                "resources/css/index.css",
                "resources/css/ar_family.css",
                "resources/css/ku_family.css",
                "resources/css/mail.css",
                "resources/css/rtl_app.css",
                "resources/css/rtl_index.css",
                // Javascript
                "resources/js/app_plyr.js",
                "resources/js/app.js",
                "resources/js/index.js",
                "resources/js/rtl_app.js",
            ],
        }),
    ],
});
