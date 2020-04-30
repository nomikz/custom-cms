<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="6">
                    <v-card
                            ref="form"
                            color="rgba(242, 242, 242, 0.53)"
                    >

                        <v-card-text>
                            <!--title-->
                            <v-text-field
                                    ref="name"
                                    v-model="name"
                                    label="Supporter's name"
                                    placeholder="Company name"
                                    :rules="[rules.required]"
                            ></v-text-field>

                            <!--Link-->
                            <v-text-field
                                    ref="name"
                                    v-model="link"
                                    label="Link to company's website"
                                    placeholder="URL to site"
                                    :rules="[rules.required]"
                            ></v-text-field>


                            <!--heroimage-->
                            <v-file-input
                                    ref="heroImage"
                                    v-on:change="handleImage"
                                    accept="image/png, image/jpeg, image/bmp"
                                    placeholder="Upload the Image"
                                    prepend-icon="mdi-camera"
                                    label="Hero image"
                                    :rules="[rules.required]"
                            ></v-file-input>


                        </v-card-text>

                        <v-divider class="mt-4"></v-divider>
                        <v-card-actions>
                            <router-link tag="v-btn" :to="{ name: 'supporters' }" text>Cancel</router-link>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" text @click="submit">Submit</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>

                <v-col cols="3"></v-col>
            </v-row>
        </v-container>
    </div>
</template>


<script>

    export default {
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },

            name: '',
            link: '',
            heroImage: null,


        }),
        methods: {
            handleImage(file) {
                this.heroImage = file;
            },

            submit() {

                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('image', this.heroImage);
                formData.append('link', this.link);

                axios.post('/api/supporters', formData, {
                    headers: {'Content-Type': 'multipart/form-data'}
                }).then(response => {
                    if (response.data.success) {
                        this.$router.push({ name: 'supporters' });
                    }
                });
            },
        },
    }
</script>

<style>
</style>
