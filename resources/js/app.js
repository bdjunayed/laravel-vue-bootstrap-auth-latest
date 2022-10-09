import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';
import ExampleComponent from './components/ExampleComponent.vue';
import MyLocation from './components/MyLocation.vue'
createApp({
    components: {
        ExampleComponent,
    }
}).mount('#app');

createApp({
    components: {
        MyLocation,
    }
}).mount('#appMyLocation');
