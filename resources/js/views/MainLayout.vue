<template>
    <v-app :dark="goDark">
        <v-navigation-drawer
                v-model="drawer"
                :clipped="$vuetify.breakpoint.lgAndUp"
                app
        >
            <v-list dense>
                <template v-for="item in items">
                    <v-list-group
                            v-if="item.children"
                            :key="item.text"
                            v-model="item.model"
                            :prepend-icon="item.model ? item.icon : item['icon-alt']"
                            append-icon=""
                    >
                        <template v-slot:activator>
                            <v-list-item-content>
                                <v-list-item-title>
                                    {{ item.text }}
                                </v-list-item-title>
                            </v-list-item-content>
                        </template>
                        <v-list-item
                                v-for="(child, i) in item.children"
                                :key="i"
                                link
                                router
                                :to="child.link"
                        >
                            <v-list-item-action v-if="child.icon">
                                <v-icon>{{ child.icon }}</v-icon>
                            </v-list-item-action>
                            <v-list-item-content>
                                <v-list-item-title>
                                    {{ child.text }}
                                </v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list-group>
                    <v-list-item
                            v-else
                            :key="item.text"
                            link
                            router
                            :to="item.link"
                    >
                        <v-list-item-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>
                                {{ item.text }}
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </template>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar
                :clipped-left="$vuetify.breakpoint.lgAndUp"
                app
                color="primary"
                dark
        >
            <v-toolbar-title
                    style="width: 250px"
                    class="ml-0 pl-4"
            >
                <span class="hidden-sm-and-down">Karate New Zealand</span>
            </v-toolbar-title>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
            <v-spacer />

            <v-switch
                    v-model="goDark"
                    color="secondary"
            ></v-switch>
            <a @click.prevent="logout" href="#">
                <v-btn
                        medium
                        :outlined="true"
                >
                        Logout
                </v-btn>
            </a>
        </v-app-bar>
        <v-content>

            <v-expand-transition>
                <router-view></router-view>
            </v-expand-transition>

        </v-content>

    </v-app>
</template>



<script>
    export default {
        props: {
            source: String,
        },
        mounted() {
            this.$vuetify.theme.dark = false;
        },
        methods: {
            logout() {
                axios.post('/logout')
                    .then(response => {
                        window.location.href = '/logintospa';
                    })
                    .catch();
            }
        },
        data: () => ({
            goDark: false,
            drawer: null,
            items: [
                {icon: 'mdi-view-dashboard', text: 'Dashboard', link: '/'},
                {icon: 'mdi-newspaper', text: 'News', link: '/news'},
                {icon: 'mdi-calendar-multiple', text: 'Events', link: '/events'},
                {icon: 'mdi-podium-gold', text: 'Tournament Results', link: '/results'},
                {icon: 'mdi-home-group', text: 'Clubs', link: '/clubs'},
                {icon: 'mdi-shield-account', text: 'Governance Members', link: '/governance-members'},
                {
                    icon: 'mdi-chevron-up',
                    'icon-alt': 'mdi-chevron-down',
                    text: 'Regional',
                    model: false,
                    children: [
                        {icon: 'mdi-store', text: 'Auckland and Northland', link: '/sdfsdf'},
                        {icon: 'mdi-store', text: 'Central North Island', link: '/sdfsdf'},
                        {icon: 'mdi-store', text: 'Lower North Island', link: '/sdfsdf'},
                        {icon: 'mdi-store', text: 'Canterbury Westland', link: '/sdfsdf'},
                        {icon: 'mdi-store', text: 'Orago Southland', link: '/sdfsdf'},
                    ],
                },
                {
                    icon: 'mdi-chevron-up',
                    'icon-alt': 'mdi-chevron-down',
                    text: 'Edit pages',
                    model: false,
                    children: [
                        {icon: 'mdi-pencil', text: 'About us page', link: '/sdfsdf'},
                        {icon: 'mdi-pencil', text: 'Event calendar page', link: '/sdfsdf'},
                        {icon: 'mdi-pencil', text: 'Find a club page', link: '/sdfsdf'},
                        {icon: 'mdi-pencil', text: 'Governance page', link: '/sdfsdf'},
                        {icon: 'mdi-pencil', text: 'About us page', link: '/sdfsdf'},
                    ],
                },
            ],
        }),
        watch: {
            goDark() {
                this.$vuetify.theme.dark = this.goDark;
            }
        }
    }
</script>
