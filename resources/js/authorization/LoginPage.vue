<template>
    <v-app>

        <v-app-bar
                app
                color="primary"
                dark
        >
            <v-toolbar-title>
                Karate New Zealand
            </v-toolbar-title>

            <v-spacer></v-spacer>


        </v-app-bar>

        <v-content>

            <v-card width="400" class="mx-auto mt-8">
                <v-card-title>
                    <h1 class="display-1">Login</h1>
                </v-card-title>
                <v-card-text>
                    <v-form>
                        <v-text-field
                                v-model="username"
                                prepend-icon="mdi-account-circle"
                                label="Email"
                        ></v-text-field>
                        <v-text-field
                                v-model="password"
                                prepend-icon="mdi-lock"
                                type="password"
                                label="Password"
                        ></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click="login" color="primary">Login</v-btn>
                </v-card-actions>
            </v-card>
        </v-content>

        <v-footer
                color="primary lighten-1"
                padless
        >
            <v-row
                    justify="center"
                    no-gutters
            >
                <v-col
                        class="primary lighten-2 py-4 text-center white--text"
                        cols="12"
                >
                    {{ new Date().getFullYear() }} — <strong>Karate New Zealand</strong>
                </v-col>
            </v-row>
        </v-footer>


    </v-app>

</template>

<script>
    export default {
        name: 'LoginPage',
        data() {
            return {
                username: '',
                password: '',

            }
        },
        methods: {
            login() {
                axios.post('/login', {
                    email: this.username,
                    password: this.password
                })
                    .then(response => {
                        if(response.status === 204) {
                            axios.get('/user').then(response => {
                                window.location.href = '/';
                            });
                        }
                    })
                    .catch(error => {
                        console.log(error.response.data.errors)
                    });
            }
        }
    }
</script>
