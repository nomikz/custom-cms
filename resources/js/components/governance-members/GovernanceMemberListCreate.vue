<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="8">
                    <v-card
                            color="rgba(242, 242, 242, 0.53)"
                    >
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
                                                hint="Optional"
                                                persistent-hint
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
                                <v-file-input label="Hero image"
                                        :rules="[rules.required]"
                                        ref="heroImage"
                                        placeholder="Upload the Image"
                                        prepend-icon="mdi-camera"
                                        accept="image/png, image/jpeg, image/bmp"
                                        v-on:change="handleImage"
                                        v-on:click:clear="heroImageUrl = ''"
                                        show-size
                                        hint="File format: PNG or JPG."
                                        persistent-hint
                                ></v-file-input>


                                <div style="color: #E53935;" v-text="this.uplaodMessage"></div>

                                <div class="image-preview" v-if="heroImageUrl.length>0">
                                    <v-img class="my-3" contain height="150" :src="heroImageUrl"></v-img>
                                </div>

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
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },
            valid: true,

            name: '',
            title: '',
            email: '',
            description: '',
            heroImage: null,
            heroImageUrl: '',
            uplaodMessage: '',

        }),
        methods: {
            handleImage(file) {
                this.heroImageUrl = '';
                if (file.size > 5 * 1024 * 1024) {
                    this.uplaodMessage = 'Size of uploaded image is bigger than 5mb. Please upload another image.';
                    return;
                }
                this.heroImage = file;
                this.uplaodMessage = '';
                this.heroImageUrl = URL.createObjectURL(this.heroImage);
            },

            submit() {

                if(this.$refs.form.validate()) {

                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('title', this.title);
                    formData.append('email', this.email);
                    formData.append('description', this.description);
                    formData.append('image', this.heroImage);

                    axios.post('/api/governance-members', formData, {
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
