// app.js
require('./bootstrap');

import { createApp } from 'vue'
import exampleComponent from './components/ExampleComponent.vue';

createApp({
    components: { exampleComponent }
}).mount('#app')