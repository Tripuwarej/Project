/* import { createApp} from 'vue'
import App from './App.vue'

import 'bootstrap/dist/css/bootstrap.min.css'

const app = createApp(App)
app.mount('#app') */

import { createApp } from 'vue'; 

import router from './router/index';

import App from "./components/App.vue"

const app = createApp(App)

app.mount("#app")
app.use(router)