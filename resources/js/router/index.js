import Vue from 'vue'
import VueRouter from 'vue-router'

import MainLayout from './../views/MainLayout'

Vue.use(VueRouter);

const routes = [
    { // main layout
        path: '/',
        component: MainLayout,
        children: [
            {
                path: '/members',
                component: () => import ("./../components/members/MembersPage"),
                children: [
                    {
                        name: 'members',
                        path: '/',
                        component: () => import ("./../components/members/MemberList"),
                    },
                    {
                        name: 'member-create',
                        path: 'create',
                        component: () => import ("./../components/members/MemberListCreate"),
                    },
                    {
                        name: 'member-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/members/MemberListEdit"),
                    },
                    {
                        name: 'member-edit-order',
                        path: 'edit-order',
                        component: () => import ("./../components/members/MemberListEditOrder"),
                    },
                ]
            },
            { // clubs
                path: '/clubs',
                component: () => import ("./../components/clubs/ClubsPage"),
                children: [
                    {
                        name: 'clubs',
                        path: '/',
                        component: () => import ("./../components/clubs/ClubList"),
                    },
                    {
                        name: 'club-create',
                        path: 'create',
                        component: () => import ("./../components/clubs/ClubListCreate"),
                    },
                    {
                        name: 'club-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/clubs/ClubListEdit"),
                    },
                ]
            },
            {
                path: '/governance-members',
                component: () => import ("./../components/governance-members/GovernanceMembersPage"),
                children: [
                    {
                        name: 'governance-members',
                        path: '/',
                        component: () => import ("./../components/governance-members/GovernanceMemberList"),
                    },
                    {
                        name: 'governance-member-create',
                        path: 'create',
                        component: () => import ("./../components/governance-members/GovernanceMemberListCreate"),
                    },
                    {
                        name: 'governance-member-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/governance-members/GovernanceMemberListEdit"),
                    },
                    {
                        name: 'governance-member-edit-order',
                        path: 'edit-order',
                        component: () => import ("./../components/governance-members/GovernanceMemberListEditOrder"),
                    },
                ]
            },
            { // regions
                path: '/regions',
                component: () => import ("./../components/regions/RegionsPage"),
                children: [
                    {
                        name: 'regions',
                        path: '/',
                        component: () => import ("./../components/regions/RegionsList"),
                    },
                    {
                        name: 'region-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/regions/RegionListEdit"),
                    },
                ]
            },
            { // supporters
                path: '/supporters',
                component: () => import ("./../components/supporters/SupportersPage"),
                children: [
                    {
                        name: 'supporters',
                        path: '/',
                        component: () => import ("./../components/supporters/SupporterList"),
                    },
                    {
                        name: 'supporter-create',
                        path: 'create',
                        component: () => import ("./../components/supporters/SupporterListCreate"),
                    },
                    {
                        name: 'supporter-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/supporters/SupporterListEdit"),
                    },
                ]
            },
            { // events
                path: '/events',
                component: () => import ("./../components/events/EventsPage"),
                children: [
                    {
                        name: 'events',
                        path: '/',
                        component: () => import ("./../components/events/EventList")
                    },
                    {
                        name: 'event-create',
                        path: 'create',
                        component: () => import ("./../components/events/EventListCreate")
                    },
                    {
                        name: 'event-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/events/EventListEdit")
                    },
                ]
            },
            { // static governance
                name: 'static-governance',
                path: '/static-governance',
                component: () => import ("./../components/static/GovernancePage")
            },
            { // static About us page
                name: 'static-about-us',
                path: '/static-about-us',
                component: () => import ("./../components/static/AboutUsPage")
            },
            {  // StaticResultsPage
                name: 'static-results',
                path: '/static-results',
                component: () => import ("./../components/static/ResultsPage")
            },
            { // dashboard
                name: 'dash',
                path: '/',
                component: () => import ("./../components/MainDashboard")
            },
            { // results
                path: '/results',
                component: () => import ("./../components/results/ResultsPage"),
                children: [
                    {
                        name: 'results',
                        path: '/',
                        component: () => import ("./../components/results/ResultList")
                    },
                    {
                        name: 'result-create',
                        path: 'create',
                        component: () => import ("./../components/results/ResultListCreate")
                    },
                    {
                        name: 'result-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/results/ResultListEdit")
                    },
                ]
            },
            { // news
                path: '/news',
                component: () => import ("./../components/news/NewsPage"),
                children: [
                    {
                        name: 'news',
                        path: '/',
                        component: () => import ("./../components/news/NewsList")
                    },
                    {
                        name: 'news-create',
                        path: 'create',
                        component: () => import ("./../components/news/NewsListCreate")
                    },
                    {
                        name: 'news-edit',
                        path: ':id/edit',
                        component: () => import ("./../components/news/NewsListEdit")
                    },
                ]
            },
        ]
    }
];

const router = new VueRouter({
    mode: 'history',
    base: '',
    routes
});

export default router
