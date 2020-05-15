import Vue from 'vue'
import VueRouter from 'vue-router'


import LoginPage from './../views/LoginPage'
import MainLayout from './../views/MainLayout'


// results
import ResultsPage from '../components/results/ResultsPage'
import ResultList from '../components/results/ResultList'
import ResultListCreate from '../components/results/ResultListCreate'
import ResultListEdit from '../components/results/ResultListEdit'


// news
import NewsPage from '../components/news/NewsPage'
import NewsList from '../components/news/NewsList'
import NewsListCreate from '../components/news/NewsListCreate'
import NewsListEdit from '../components/news/NewsListEdit'


// events
import EventsPage from '../components/events/EventsPage'
import EventList from '../components/events/EventList'
import EventListCreate from '../components/events/EventListCreate'
import EventListEdit from '../components/events/EventListEdit'


// supporters
import SupportersPage from '../components/supporters/SupportersPage'
import SupporterList from '../components/supporters/SupporterList'
import SupporterListCreate from '../components/supporters/SupporterListCreate'
import SupporterListEdit from '../components/supporters/SupporterListEdit'


// regions
import RegionsPage from '../components/regions/RegionsPage'
import RegionList from '../components/regions/RegionsList'
import RegionListEdit from '../components/regions/RegionListEdit'

// clubs
import ClubsPage from './../components/clubs/ClubsPage'
import ClubList from '../components/clubs/ClubList'
import ClubListCreate from '../components/clubs/ClubListCreate'
import ClubListEdit from '../components/clubs/ClubListEdit'


// members
import MembersPage from './../components/members/MembersPage'
import MemberList from '../components/members/MemberList'
import MemberListCreate from '../components/members/MemberListCreate'
import MemberListEdit from '../components/members/MemberListEdit'
import MemberListEditOrder from '../components/members/MemberListEditOrder'


// governance members
import GovernancePage from './../components/governance-members/GovernanceMembersPage'
import GovernanceMemberList from '../components/governance-members/GovernanceMemberList'
import GovernanceMemberListCreate from '../components/governance-members/GovernanceMemberListCreate'
import GovernanceMemberListEdit from '../components/governance-members/GovernanceMemberListEdit'
import GovernanceMemberListEditOrder from '../components/governance-members/GovernanceMemberListEditOrder'

import MainDashboard from './../components/MainDashboard'

// static
import StaticGovernancePage from '../components/static/GovernancePage'
import StaticAboutUsPage from '../components/static/AboutUsPage'
import StaticResultsPage from '../components/static/ResultsPage'


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
            { // static governance
                name: 'static-governance',
                path: '/static-governance',
                component: StaticGovernancePage
            },
            { // static About us page
                name: 'static-about-us',
                path: '/static-about-us',
                component: StaticAboutUsPage
            },
            {  // StaticResultsPage
                name: 'static-results',
                path: '/static-results',
                component: StaticResultsPage
            },
            { // dashboard
                name: 'dash',
                path: '/',
                component: MainDashboard
            },
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
                        component: ResultListCreate
                    },
                    {
                        name: 'result-edit',
                        path: ':id/edit',
                        component: ResultListEdit
                    },
                ]
            },
            { // news
                path: '/news',
                component: NewsPage,
                children: [
                    {
                        name: 'news',
                        path: '/',
                        component: NewsList
                    },
                    {
                        name: 'news-create',
                        path: 'create',
                        component: NewsListCreate
                    },
                    {
                        name: 'news-edit',
                        path: ':id/edit',
                        component: NewsListEdit
                    },
                ]
            },
            { // events
                path: '/events',
                component: EventsPage,
                children: [
                    {
                        name: 'events',
                        path: '/',
                        component: EventList
                    },
                    {
                        name: 'event-create',
                        path: 'create',
                        component: EventListCreate
                    },
                    {
                        name: 'event-edit',
                        path: ':id/edit',
                        component: EventListEdit
                    },
                ]
            },
            { // supporters
                path: '/supporters',
                component: SupportersPage,
                children: [
                    {
                        name: 'supporters',
                        path: '/',
                        component: SupporterList
                    },
                    {
                        name: 'supporter-create',
                        path: 'create',
                        component: SupporterListCreate
                    },
                    {
                        name: 'supporter-edit',
                        path: ':id/edit',
                        component: SupporterListEdit
                    },
                ]
            },
            { // regions
                path: '/regions',
                component: RegionsPage,
                children: [
                    {
                        name: 'regions',
                        path: '/',
                        component: RegionList
                    },
                    {
                        name: 'region-edit',
                        path: ':id/edit',
                        component: RegionListEdit
                    },
                ]
            },
            { // clubs
                path: '/clubs',
                component: ClubsPage,
                children: [
                    {
                        name: 'clubs',
                        path: '/',
                        component: ClubList
                    },
                    {
                        name: 'club-create',
                        path: 'create',
                        component: ClubListCreate
                    },
                    {
                        name: 'club-edit',
                        path: ':id/edit',
                        component: ClubListEdit
                    },
                ]
            },


            {
                path: '/members',
                component: MembersPage,
                children: [
                    {
                        name: 'members',
                        path: '/',
                        component: MemberList
                    },
                    {
                        name: 'member-create',
                        path: 'create',
                        component: MemberListCreate
                    },
                    {
                        name: 'member-edit',
                        path: ':id/edit',
                        component: MemberListEdit
                    },
                    {
                        name: 'member-edit-order',
                        path: 'edit-order',
                        component: MemberListEditOrder
                    },
                ]
            },
            {
                path: '/governance-members',
                component: GovernancePage,
                children: [
                    {
                        name: 'governance-members',
                        path: '/',
                        component: GovernanceMemberList
                    },
                    {
                        name: 'governance-member-create',
                        path: 'create',
                        component: GovernanceMemberListCreate
                    },
                    {
                        name: 'governance-member-edit',
                        path: ':id/edit',
                        component: GovernanceMemberListEdit
                    },
                    {
                        name: 'governance-member-edit-order',
                        path: 'edit-order',
                        component: GovernanceMemberListEditOrder
                    },
                ]
            },
            // to do for each page
        ]
    }
];

const router = new VueRouter({
    mode: 'history',
    base: '',
    routes
});

export default router
