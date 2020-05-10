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
                                        placeholder="Upload the Image"
                                        prepend-icon="mdi-camera"
                                        label="Hero image"
                                        v-on:change="handleImage"
                                        v-on:click:clear="heroImageUrl = ''"
                                        show-size
                                        hint="Recommended image size: 180*80 or 360*160 pixels. File format: PNG or JPG."
                                        persistent-hint
                                ></v-file-input>
                                <div style="color: #E53935;" v-text="this.uplaodMessage"></div>

                                <div class="image-preview" v-if="heroImageUrl.length>0">
                                    <v-img class="my-3" contain height="150" :src="heroImageUrl"></v-img>
                                </div>


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
                this.heroImageUrl = '/' + data.filename;
            });
        },
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },
            valid: true,

            name: '',
            link: '',
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
