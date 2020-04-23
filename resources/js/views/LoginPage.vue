<template>
    <v-app id="inspire">

        <v-content>
            <v-container
                    class="fill-height"
                    fluid
            >
                <v-row
                        align="center"
                        justify="center"
                >
                    <v-col
                            cols="12"
                            md="4"
                            sm="8"
                    >
                        <v-card class="elevation-6">
                            <v-toolbar
                                    color="primary"
                                    dark
                                    flat
                            >
                                <v-toolbar-title>Login form</v-toolbar-title>
                                <v-spacer></v-spacer>
                                <v-toolbar-title>Karate New Zealand</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form @submit.prevent="login">
                                    <v-text-field
                                            v-model="formData.email"
                                            label="Login"
                                            name="login"
                                            prepend-icon="mdi-account"
                                            type="text"
                                    />

                                    <v-text-field
                                            v-model="formData.password"
                                            id="password"
                                            label="Password"
                                            name="password"
                                            prepend-icon="mdi-lock"
                                            type="password"
                                    />
                                    <v-card-actions>
                                        <v-spacer/>
                                        <v-btn type="submit" color="primary">Login</v-btn>
                                    </v-card-actions>
                                </v-form>
                            </v-card-text>

                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-content>

    </v-app>
</template>

<script>

    export default {
        data() {
            return {
                formData: {
                    email: '',
                    password: '',
                }
            }
        },
        methods: {
            login() {
                axios.post('/login', {
                    username: 'nomikztop@gmail.com',
                    password: '1423qrwe'
                }).then(response => {
                    console.log(response);
                });
            }
        }
    }
</script>
