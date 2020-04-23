import Vue from 'vue'
import VueRouter from 'vue-router'

import LoginPage from './../views/LoginPage'
import MainLayout from './../views/MainLayout'

import MainDashboard from './../components/MainDashboard'
import NewsPage from './../components/NewsPage'
import EventsPage from './../components/EventsPage'
import ResultsPage from '../components/results/ResultsPage'
import ResultList from '../components/results/ResultList'
import ResultCreate from '../components/results/ResultCreate'
import ResultEdit from '../components/results/ResultEdit'
import ResultShow from '../components/results/ResultShow'
import ClubsPage from './../components/ClubsPage'
import GovernancePage from './../components/GovernancePage'
import RegionalsPage from './../components/RegionalsPage'

Vue.use(VueRouter);

const routes = [
    { // login
        path: '/login',
        name: 'login',
        component: LoginPage
    },
    { // main layout
        path: '/',
        component: MainLayout,
        children: [
            { // results
                path: '/results',
                component: ResultsPage,
                children: [
                    {
                        name: 'results',
                        path: '/',
                        component: ResultList
                    },
                    {
                        name: 'result-create',
                        path: 'create',
                        component: ResultCreate
                    },
                    {
                        name: 'result-show',
                        path: ':id',
                        component: ResultShow
                    },
                    {
                        name: 'result-edit',
                        path: ':id/edit',
                        component: ResultEdit
                    },
                ]
            },
            {
                name: 'home-page',
                path: '',
                component: MainDashboard
            },
            {
                name: 'news',
                path: '/news',
                component: NewsPage
            },
            {
                name: 'events',
                path: '/events',
                component: EventsPage
            },
            {
                name: 'clubs',
                path: '/clubs',
                component: ClubsPage
            },
            {
                name: 'governance-members',
                path: '/governance-members',
                component: GovernancePage
            },
            {
                name: 'regionals',
                path: '/regionals',
                component: RegionalsPage
            },
            // to do for each page
        ]
    }
];

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes
});

export default router
