import VueRouter from 'vue-router';

import Main from './components/Main.vue'




const router = new VueRouter({
    mode: 'history',
    routes: [
    {
        path: '/customer/dashboard',
        component: Main,
        meta: {
            forAuth: true
        }
    }
    ],
});

export default router
