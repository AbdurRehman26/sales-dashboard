import VueRouter from 'vue-router';

import Main from './components/Main.vue'
import Login from './components/auth/Login.vue'
import DashboardMain from '@/components/dashboard/List.vue'
import MarketSingle from '@/components/dashboard/Single.vue'
import JournalView from '@/components/journal/Single.vue'
import JournalCreate from '@/components/journal/Create.vue'
import UpdatePassword from './components/auth/UpdatePassword.vue'

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
        path: '/customer/change-password',
        name: 'change.password',
        component: UpdatePassword,
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
                path: 'journal/:id',
                name: 'journal.view',
                component: JournalView,
                meta: {
                    title: 'Home',
                    noSidebar: true,
                    bodyClass: 'auth-body',
                },
            },
            {
                path: 'journal/:id/create',
                name: 'journal.create',
                component: JournalCreate,
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
