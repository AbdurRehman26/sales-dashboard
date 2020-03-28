import VueRouter from 'vue-router';

import Main from './components/Main.vue'
import Login from './components/auth/Login.vue'
import Signup from './components/auth/Signup.vue'
import DashboardMain from '@/components/dashboard/List.vue'
import MarketSingle from '@/components/dashboard/Single.vue'

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
        path: '/customer/signup',
        component: Signup,
        meta: {
            forAuth: true
        }
    },
    {
        path: '/customer/market/',
        component: Main,
        meta: {
            forAuth: true
        },
        children : [
            {
                path: '',
                name: 'dashboard.main',
                component: DashboardMain,
                meta: {
                    title: 'Home',
                    noSidebar: true,
                    bodyClass: 'auth-body',
                },
            },
            {
                path: ':id',
                name: 'market.view',
                component: MarketSingle,
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
