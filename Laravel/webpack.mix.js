const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('./../public_html');
mix.options({
  processCssUrls: false
});
mix.js('resources/js/index.js', 'js')
  .js('resources/js/app.js', 'js')
  .js('resources/js/plyr.js', 'js')
  .js('resources/js/app_plyr.js', 'js')
  .js('resources/js/rtl_app.js', 'js')
  .postCss('resources/css/index.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ])
  .postCss('resources/css/app.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ])
  .postCss('resources/css/mail.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ]).postCss('resources/css/fonts.css', 'css', [
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ]).postCss('resources/css/rtl_app.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ]).postCss('resources/css/rtl_index.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ]).postCss('resources/css/ku_index.css', 'css', [
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ]).postCss('resources/css/ar_index.css', 'css', [
    require('autoprefixer'),
    require('cssnano')({
      preset: 'default',
    }),
  ]);
mix.disableSuccessNotifications();
