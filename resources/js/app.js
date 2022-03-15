// app.js
require('./bootstrap');

import { createApp } from 'vue'
import rightComponent from './components/RightComponent.vue';
import leftComponent from './components/LeftComponent.vue';
import midComponent from './components/MidComponent.vue';
createApp({
    components: { rightComponent,leftComponent,midComponent }
}).mount('#app')