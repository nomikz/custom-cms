<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="9">
                    <v-card
                            ref="form"
                            color="rgba(242, 242, 242, 0.53)"
                    >

                        <v-card-text>
                            <!--title-->
                            <v-text-field
                                    ref="title"
                                    v-model="title"
                                    label="Title"
                                    placeholder="Event name"
                                    :rules="[rules.required]"
                            ></v-text-field>

                            <!-- date time-start time-finish -->
                            <v-row>
                                <v-col>

                                    <!--date-->
                                    <v-menu
                                            v-model="datePicker"
                                            :close-on-content-click="false"
                                            :nudge-right="40"
                                            transition="scale-transition"
                                            offset-y
                                            min-width="200px"
                                    >
                                        <template v-slot:activator="{ on }">
                                            <v-text-field
                                                    v-model="date"
                                                    label="Date of the event"
                                                    prepend-icon="mdi-calendar"
                                                    readonly
                                                    v-on="on"
                                                    :rules="[rules.required]"
                                            ></v-text-field>
                                        </template>
                                        <v-date-picker v-model="date" @input="datePicker = false"></v-date-picker>
                                    </v-menu>
                                </v-col>


                                <v-col>
                                    <!--time start-->
                                    <v-menu
                                            ref="startTime"
                                            v-model="startTimePicker"
                                            :close-on-content-click="false"
                                            :nudge-right="40"
                                            :return-value.sync="startTime"
                                            transition="scale-transition"
                                            offset-y
                                            max-width="200px"
                                            min-width="200px"
                                    >
                                        <template v-slot:activator="{ on }">
                                            <v-text-field
                                                    v-model="startTime"
                                                    label="Start time"
                                                    prepend-icon="mdi-watch"
                                                    readonly
                                                    v-on="on"
                                                    :rules="[rules.required]"
                                            ></v-text-field>
                                        </template>
                                        <v-time-picker
                                                v-if="startTimePicker"
                                                v-model="startTime"
                                                full-width
                                                @click:minute="$refs.startTime.save(startTime)"
                                        ></v-time-picker>
                                    </v-menu>
                                </v-col>



                                <v-col>
                                    <!--time finish-->
                                    <v-menu
                                            ref="finishTime"
                                            v-model="finishTimePicker"
                                            :close-on-content-click="false"
                                            :nudge-right="40"
                                            :return-value.sync="finishTime"
                                            transition="scale-transition"
                                            offset-y
                                            max-width="200px"
                                            min-width="200px"
                                    >
                                        <template v-slot:activator="{ on }">
                                            <v-text-field
                                                    v-model="finishTime"
                                                    label="Finish time"
                                                    prepend-icon="mdi-watch"
                                                    readonly
                                                    v-on="on"
                                                    :rules="[rules.required]"
                                            ></v-text-field>
                                        </template>
                                        <v-time-picker
                                                v-if="finishTimePicker"
                                                v-model="finishTime"
                                                full-width
                                                @click:minute="$refs.finishTime.save(finishTime)"
                                        ></v-time-picker>
                                    </v-menu>
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

                            <!--heroimage-->
                            <v-file-input
                                    ref="heroImage"
                                    v-on:change="handleImage"
                                    accept="image/png, image/jpeg, image/bmp"
                                    placeholder="Upload the Image"
                                    prepend-icon="mdi-camera"
                                    label="Hero image"
                            ></v-file-input>


                            <!--result document-->
                            <v-file-input
                                    ref="resultDocument"
                                    @change="handleDocument"
                                    label="Document"
                                    outlined
                                    dense
                            ></v-file-input>
                        </v-card-text>

                        <v-divider class="mt-4"></v-divider>
                        <v-card-actions>
                            <router-link tag="v-btn" :to="{ name: 'results' }" text>Cancel</router-link>
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
            axios.get('/api/results/' + this.$route.params.id).then(response => {

                let data = response.data.data;
                this.title = data.title;
                this.date = data.date.substr(0, 10);
                this.startTime = data.date.substr(11, 5);
                this.finishTime = data.date.substr(17, 5);
                this.body = data.body;
            });

            setTimeout( () => {
                this.editor.setContent(this.body);
                window.editorHtmlContent = this.body;
            }, 1000);
        },
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },

            title: '',

            datePicker: false,
            date: new Date().toISOString().substr(0, 10),

            startTime: null,
            startTimePicker: false,

            finishTime: null,
            finishTimePicker: false,

            content: '',


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
            handleDocument(file) {
                this.resultDocument = file;
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
                // formData.title = this.title;
                let date = this.date;
                date += ' ' + this.finishTime;
                date += ' ' + this.startTime;


                let formData = new FormData();
                formData.append('title', this.title);
                formData.append('date', date);
                formData.append('content', window.editorHtmlContent);
                formData.append('image', this.heroImage);
                formData.append('document', this.resultDocument);


                axios.post('/api/results/' + this.$route.params.id, formData, {
                    headers: {'Content-Type': 'multipart/form-data'}
                }).then(response => {
                    if (response.data.success) {
                        this.$router.push({ name: 'results' });
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
