import VueRouter from 'vue-router';

import Main from './components/Main.vue'
import Login from './components/auth/Login.vue'
import DashboardMain from '@/components/dashboard/List.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
    {
        path: '/customer/login',
        component: Login,
        meta: {
            forAuth: true
        }
    },
    {
        path: '/customer/dashboard',
        component: Main,
        meta: {
            forAuth: true
        },
        children : [

            {
                path: '/',
                name: 'dashboard.main',
                component: DashboardMain,
                meta: {
                    title: 'Home',
                    noSidebar: true,
                    bodyClass: 'auth-body',
                },
            },
        


        ]
    }
    ],
});

export default router
