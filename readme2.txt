L9
laravel new example-app

git init
git add .
git commit -m "start"
code .



npm add -D sass
make a file -> scss/app.scss
npm i -D bootstrap@5.2.0

in vite file : 
input: ['resources/scss/app.scss', 'resources/js/app.js'],


npm i -D @vitejs/plugin-vue
make file -> js/components/ExampleComponent.vue
<script>
export default {
  data() {
    return {
      message: 'Hello World!',
      counter: {
        count: 0
      }
    }
  }
}
</script>

<template>
  <h1>{{ message }}</h1>
  <p>Count is: {{ counter.count }}</p>
</template>

app.js
import {createApp} from 'vue'; ->
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import ExampleComponent from './components/ExampleComponent.vue';

createApp({
    components: {
        ExampleComponent,
    }
}).mount('#app');


vite.config.js
https://laravel.com/docs/9.x/vite#vue
import vue from '@vitejs/plugin-vue';

vue({
            template: {
                transformAssetUrls: {
                    // The Vue plugin will re-write asset URLs, when referenced
                    // in Single File Components, to point to the Laravel web
                    // server. Setting this to `null` allows the Laravel plugin
                    // to instead re-write asset URLs to point to the Vite
                    // server instead.
                    base: null,
 
                    // The Vue plugin will parse absolute URLs and treat them
                    // as absolute paths to files on disk. Setting this to
                    // `false` will leave absolute URLs un-touched so they can
                    // reference assets in the public directly as expected.
                    includeAbsolute: false,
                },
            },
        }),








Step 2 auth:


1.
composer require laravel/ui
2.
php artisan ui bootstrap --auth











eval "$(ssh-agent -s)"
ssh-add -K ~/.ssh/id_rsa
