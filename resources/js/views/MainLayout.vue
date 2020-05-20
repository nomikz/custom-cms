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

                    class="ml-0"
            >
                <span class="hidden-sm-and-down">Karate New Zealand</span>
            </v-toolbar-title>

            <v-app-bar-nav-icon @click.stop="drawer = !drawer" />

            <v-spacer />


            <v-switch
                    class="mr-4"
                    style="height: 25px"
                    inset
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

            <v-progress-linear
                    :color="sliderColor"
                    bottom
                    fixed
                    height="3"
                    style="z-index: 99999"
                    v-model="sliderValue"
                    background-color="rgba(0, 0, 0, 0)"
            ></v-progress-linear>
        </v-app-bar>
        <v-content>
            <v-expand-transition>
                <router-view></router-view>
            </v-expand-transition>


            <div>
                <v-snackbar
                        style="bottom: 40px; right: 40px"
                        :value="alertIsActive"
                        :timeout="0"
                        color="green"
                        bottom right
                >
                    <!--                        bottom right-->
                    <div class="title">
                        <v-icon color="white">mdi-check-outline</v-icon>
                        {{ alertMessage }}
                    </div>
                </v-snackbar>
            </div>
        </v-content>


    </v-app>
</template>



<script>
    export default {

        props: {
            source: String,
        },
        computed: {
            alertMessage() {
                return this.$store.getters.alertMessage;
            },
            alertIsActive() {
                return this.$store.getters.alertIsActive;
            },
        },
        mounted() {
            this.$vuetify.theme.dark = false;
        },
        methods: {
            logout() {
                axios.post('/logout')
                    .then(response => {
                        window.location.href = '/login';
                    })
                    .catch();
            }
        },
        data: () => ({
            goDark: false,
            drawer: null,
            items: [
                {icon: 'mdi-newspaper', text: 'News', link: '/news'},
                {icon: 'mdi-calendar-multiple', text: 'Events', link: '/events'},
                {icon: 'mdi-podium-gold', text: 'Tournament Results', link: '/results'},
                {icon: 'mdi-home-group', text: 'Supporters', link: '/supporters'},
                {icon: 'mdi-store', text: 'Regions', link: '/regions'},
                {icon: 'mdi-home-group', text: 'Clubs', link: '/clubs'},
                {icon: 'mdi-account-group', text: 'Region Members', link: '/members'},
                {icon: 'mdi-shield-account', text: 'Governance Members', link: '/governance-members'},
                {
                    icon: 'mdi-chevron-up',
                    'icon-alt': 'mdi-chevron-down',
                    text: 'Edit pages',
                    model: false,
                    children: [
                        {icon: 'mdi-pencil', text: 'Governance page', link: '/static-governance'},
                        {icon: 'mdi-pencil', text: 'About us page', link: '/static-about-us'},
                        {icon: 'mdi-pencil', text: 'Results page', link: '/static-results'},
                    ],
                },
            ],
            sliderValue: 0,
            sliderColor: 'transparent'

        }),
        watch: {
            goDark() {
                this.$vuetify.theme.dark = this.goDark;
            },
            '$route.name': function (val) {
                this.sliderValue = 0;
                this.sliderColor = 'white';


                setTimeout(() => {
                    this.sliderValue = 70;
                }, 190);

                setTimeout(() => {
                    this.sliderValue = 100;
                    this.sliderColor = 'transparent';
                }, 390);
            }
        }
    }
</script>
