<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="9">
                    <v-card color="rgba(242, 242, 242, 0.53)">

                        <v-form
                                ref="form"
                                v-model="valid"
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
                                ></v-file-input>


                            </v-card-text>

                            <v-divider class="mt-4"></v-divider>
                            <v-card-actions>
                                <router-link tag="v-btn" :to="{ name: 'supporters' }" text>Cancel</router-link>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" text @click="submit">Submit</v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-card>

                </v-col>

                <v-col cols="3"></v-col>
            </v-row>
        </v-container>
    </div>
</template>


<script>

    export default {
        created() {
            axios.get('/api/supporters/' + this.$route.params.id).then(response => {

                let data = response.data.data;
                this.name = data.title;
                this.link = data.link;
            });
        },
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },
            valid: true,


            name: '',
            link: '',

        }),
        methods: {
            handleImage(file) {
                this.heroImage = file;
            },

            submit() {
                if(this.$refs.form.validate()) {

                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('link', this.link);
                    formData.append('image', this.heroImage);


                    axios.post('/api/supporters/' + this.$route.params.id, formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    }).then(response => {
                        if (response.data.success) {
                            this.$router.push({name: 'supporters'});
                        }
                    });
                }
            },
        },
    }
</script>

<style>
</style>
