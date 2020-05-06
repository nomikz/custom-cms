<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="8">
                    <v-card color="rgba(242, 242, 242, 0.53)">
                        <v-form
                                ref="form"
                                v-model="valid"
                                lazy-validation
                        >

                            <v-card-text>
                                <v-row>
                                    <v-col>
                                        <!--Name-->
                                        <v-text-field
                                                ref="name"
                                                v-model="name"
                                                label="Full name"
                                                :rules="[rules.required]"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col>
                                        <!--Title-->
                                        <v-text-field
                                                ref="title"
                                                v-model="title"
                                                label="Title"
                                                :rules="[rules.required]"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col>
                                        <!--Email-->
                                        <v-text-field
                                                ref="email"
                                                v-model="email"
                                                label="Email"
                                                :rules="[rules.required]"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>


                                <v-textarea
                                        outlined
                                        v-model="description"
                                        label="Description"
                                        value="Type here ..."
                                        :rules="[rules.required]"
                                ></v-textarea>


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
                                <router-link tag="v-btn" :to="{ name: 'governance-members' }" text>Cancel</router-link>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" text @click="submit">Submit</v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-card>
                </v-col>

            </v-row>
        </v-container>
    </div>
</template>


<script>

    export default {
        created() {
            axios.get('/api/governance-members/' + this.$route.params.id).then(response => {
                let data = response.data.data;
                this.name = data.name;
                this.title = data.title;
                this.email = data.email;
                this.description = data.description;
            });
        },
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },

            valid: false,

            name: '',
            title: '',
            email: '',
            description: '',
            heroImage: null,

        }),
        methods: {
            handleImage(file) {
                this.heroImage = file;
            },

            submit() {
                if(this.$refs.form.validate()) {

                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('title', this.title);
                    formData.append('email', this.email);
                    formData.append('description', this.description);
                    formData.append('image', this.heroImage);

                    axios.post('/api/governance-members/' + this.$route.params.id, formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    }).then(response => {
                        if (response.data.success) {
                            this.$router.push({ name: 'governance-members' });
                        }
                    });

                }
            },
        },
    }
</script>

<style>
</style>
