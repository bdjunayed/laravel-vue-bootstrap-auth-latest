import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';
import ExampleComponent from './components/ExampleComponent.vue';

createApp({
    components: {
        ExampleComponent,
    }    
}).mount('#app');