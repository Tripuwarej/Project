import { createRouter, createWebHistory } from 'vue-router'

import Home from '../components/Home.vue'
import About from '../components/About.vue'
import Login from '../components/Login.vue'

const routes = [

  {
    path: '/',
    name: 'home',
    component: Home,
  },

  {
    path: '/about',
    name: 'about',
    component: About,
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
  },

]

const router = createRouter({
    history: createWebHistory(`${import.meta.env.VITE_BASE_URL}`),
    routes
});

export default router;


