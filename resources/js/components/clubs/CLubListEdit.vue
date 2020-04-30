<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="12">
                    <v-card
                            ref="form"
                            color="rgba(242, 242, 242, 0.53)"
                    >
                        <v-card-text>

                            <p class="title black--text">Club information</p>



                            <!--title-->
                            <v-row>
                                <v-col cols="3">
                                    <v-text-field
                                            ref="site"
                                            v-model="site"
                                            label="URL of the website"
                                            placeholder="https:://..."
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="3">
                                    <!--description-->
                                    <v-text-field
                                            ref="phone"
                                            v-model="phone"
                                            label="Phone number"
                                            placeholder="Phone number"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="3">
                                    <!--description-->
                                    <v-text-field
                                            ref="email"
                                            v-model="email"
                                            label="Email"
                                            placeholder="Email"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="3">
                                    <v-select
                                            v-model="region"
                                            :items="regions"
                                            item-text="title"
                                            item-value="id"
                                            label="Region"
                                    ></v-select>
                                </v-col>
                            </v-row>



                            <!--menu functionality-->
                            <v-row>
                                <v-col>
                                    <div>
                                        <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
                                            <div class="menubar">
                                                <v-btn
                                                        x-small
                                                        :class="{ 'grey': isActive.bold() }"
                                                        @click="commands.bold"
                                                >
                                                    Bold
                                                </v-btn>

                                                <v-btn
                                                        x-small
                                                        :class="{ 'is-active': isActive.italic() }"
                                                        @click="commands.italic"

                                                >
                                                    Italic
                                                </v-btn>





                                                <v-btn
                                                        x-small
                                                        :class="{ 'is-active': isActive.heading({ level: 1 }) }"
                                                        @click="commands.heading({ level: 1 })"
                                                >
                                                    h1
                                                </v-btn>


                                                <v-btn
                                                        x-small
                                                        :class="{ 'is-active': isActive.heading({ level: 2 }) }"
                                                        @click="commands.heading({ level: 2 })"
                                                >
                                                    h2
                                                </v-btn>

                                                <v-btn
                                                        x-small
                                                        :class="{ 'is-active': isActive.heading({ level: 3 }) }"
                                                        @click="commands.heading({ level: 3 })"
                                                >
                                                    h3
                                                </v-btn>


                                                <v-btn
                                                        x-small
                                                        :class="{ 'is-active': isActive.bullet_list() }"
                                                        @click="commands.bullet_list"
                                                >
                                                    ul
                                                </v-btn>

                                                <v-btn
                                                        x-small
                                                        :class="{ 'is-active': isActive.ordered_list() }"
                                                        @click="commands.ordered_list"
                                                >
                                                    ol
                                                </v-btn>
                                                <editor-menu-bubble class="menububble" :editor="editor" @hide="hideLinkMenu" v-slot="{ commands, isActive, getMarkAttrs, menu }">
                                                    <div
                                                            class="menububble"
                                                            :class="{ 'is-active': menu.isActive }"
                                                            :style="`left: ${menu.left}px; bottom: ${menu.bottom}px;`"
                                                    >

                                                        <form class="menububble__form" v-if="linkMenuIsActive" @submit.prevent="setLinkUrl(commands.link, linkUrl)">
                                                            <input class="menububble__input" type="text" v-model="linkUrl" placeholder="https://" ref="linkInput" @keydown.esc="hideLinkMenu"/>
                                                            <v-btn
                                                                    x-small
                                                                    class="menububble__button"
                                                                    @click="setLinkUrl(commands.link, null)"
                                                                    type="button"
                                                            >
                                                                remove
                                                            </v-btn>
                                                        </form>

                                                        <template v-else>
                                                            <v-btn
                                                                    x-small
                                                                    class="menububble__button"
                                                                    @click="showLinkMenu(getMarkAttrs('link'))"
                                                                    :class="{ 'is-active': isActive.link() }"
                                                            >
                                                                <span>{{ isActive.link() ? 'Update Link' : 'Add Link'}}</span>

                                                            </v-btn>
                                                        </template>

                                                    </div>
                                                </editor-menu-bubble>




                                            </div>
                                        </editor-menu-bar>
                                    </div>
                                </v-col>
                            </v-row>

                            <!--editor.content-->
                            <v-row>
                                <v-col>
                                    <v-card>
                                        <editor-content class="editor__content" :editor="editor" />
                                    </v-card>
                                </v-col>
                            </v-row>



                            <!--latitude -->
                            <v-row>

                                <v-col>
                                    <v-alert
                                            border="bottom"
                                            colored-border
                                            type="warning"
                                            elevation="2"
                                            dense
                                    >
                                        <p class="font-weight-light">To indicate latitude and longitude, please, click view larger map, find the exact building and copy its coordinates to the fields.</p>
                                        <p class="font-weight-light">Example: <strong>-43.632499</strong> (Latitude), <strong>171.650930</strong> (Logitude).</p>
                                    </v-alert>
                                </v-col>

                                <v-col cols="3" class="my-auto">
                                    <v-text-field
                                            ref="latitude"
                                            v-model="latitude"
                                            label="Latitude"
                                            placeholder="Latitude"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="3" class="my-auto">
                                    <!--description-->
                                    <v-text-field
                                            ref="longitude"
                                            v-model="longitude"
                                            label="Longitude"
                                            placeholder="Longitude"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1481931.664611119!2d170.69520657173433!3d-43.494036713144396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d2dd8337875d903%3A0x337764303169e281!2sCanterbury%2C%20New%20Zealand!5e0!3m2!1sen!2skz!4v1588192394175!5m2!1sen!2skz" width="700" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </v-col>
                            </v-row>
                        </v-card-text>
                        <v-divider class="mt-4"></v-divider>
                        <v-card-actions>
                            <router-link tag="v-btn" :to="{ name: 'clubs' }" text>Cancel</router-link>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" text @click="submit">Submit</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>

            </v-row>
        </v-container>
    </div>
</template>


<script>
    import { Editor, EditorContent, EditorMenuBar, EditorMenuBubble } from 'tiptap'
    import {
        BulletList,
        Heading,
        ListItem,
        OrderedList,
        TodoItem,
        TodoList,
        Bold,
        Italic,
        Link,
    } from 'tiptap-extensions'

    window.editorHtmlContent = '';
    export default {
        components: {
            EditorContent,
            EditorMenuBar,
            EditorMenuBubble
        },
        created() {
            axios.get('/api/clubs/' + this.$route.params.id).then(response => {
                let data = response.data.data;
                this.site = data.site;
                this.email = data.email;
                this.phone = data.phone_number;
                this.region = data.region.id;
                this.latitude = data.latitude;
                this.longitude = data.longitude;
                this.description = data.description;
            });
            axios.get('/api/regions').then(respnose => {
                this.regions = respnose.data.data;
                this.region = this.regions[0].id;

            });

            setTimeout( () => {
                this.editor.setContent(this.description);
                window.editorHtmlContent = this.description;
            }, 1000);
        },
        data: () => ({

            site: '',
            email: '',
            phone: '',
            region: null,
            regions: [],
            latitude: '',
            longitude: '',

            rules: {
                required: value => !!value || 'Required.'
            },

            // editor related
            linkUrl: null,
            linkMenuIsActive: false,
            editor: new Editor({
                onUpdate: ( { getHTML } ) => {
                    window.editorHtmlContent = getHTML();
                },
                content: '',
                extensions: [
                    new BulletList(),
                    new Heading({ levels: [1, 2, 3] }),
                    new ListItem(),
                    new OrderedList(),
                    new TodoItem(),
                    new TodoList(),
                    new Link(),
                    new Bold(),
                    new Italic(),
                ],

            }),
        }),
        methods: {
            handleImage(file) {
                this.heroImage = file;
            },

            showLinkMenu(attrs) {
                this.linkUrl = attrs.href;
                this.linkMenuIsActive = true;
                this.$nextTick(() => {
                    this.$refs.linkInput.focus()
                })
            },
            hideLinkMenu() {
                this.linkUrl = null;
                this.linkMenuIsActive = false;
            },
            setLinkUrl(command, url) {
                command({ href: url })
                this.hideLinkMenu()
            },

            submit() {
                let formData = new FormData();
                formData.append('site', this.site);
                formData.append('phone_number', this.phone);
                formData.append('email', this.email);
                formData.append('description', window.editorHtmlContent);
                formData.append('region_id', this.region);
                formData.append('latitude', this.latitude);
                formData.append('longitude', this.longitude);


                axios.post('/api/clubs/' + this.$route.params.id, formData, {
                    headers: {'Content-Type': 'multipart/form-data'}
                }).then(response => {
                    if (response.data.success) {
                        this.$router.push({ name: 'clubs' });
                    }
                });
            },
        },
        beforeDestroy() {
            this.editor.destroy()
        },
    }
</script>

<style>
    .menububble {
        display: inline-block;
    }
    .editor__content {
        border: 1px solid grey;
        padding: 10px;
    }
</style>
