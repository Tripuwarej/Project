
import './bootstrap';
window.Vue = require('vue').default;

import { createApp } from 'vue'; 

import ExampleComponent from "./components/ExampleComponent.vue"
createApp(ExampleComponent).mount("#vueapp")



