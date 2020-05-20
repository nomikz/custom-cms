<template>
    <div>
        <v-container style="margin-left: 50px;">

            <p class="display-2 text-center mt-6">About us page</p>


            <v-row>
                <v-col cols="12">
                    <v-tabs
                            v-model="tab"
                            background-color="primary"
                            dark
                            centered
                    >
                        <v-tab key="0">What we do</v-tab>

                        <v-tab key="1">Other sections</v-tab>

                    </v-tabs>

                    <v-tabs-items v-model="tab" class="pt-8 pb-8">




                            <v-tab-item :key="0">
                                <v-row>

                                    <v-col cols="2"></v-col>
                                    <v-col cols="8">
                                        <v-card
                                                color="rgba(223, 223, 223, 0.53)"
                                                class="px-8 py-4"
                                        >
                                            <p class="title">What we do</p>
                                            <p class="body-1">Location: Main content of the page</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="about_page_what_we_do"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="editWhatWeDo"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-col>

                                </v-row>
                            </v-tab-item>



                            <v-tab-item
                                    :key="1"
                            >
                                <v-card
                                        outlined
                                >
                                    <v-card-actions>
                                        <v-spacer></v-spacer>

                                        <v-btn
                                                v-for="sectionItem in sections"
                                                @click="section = sectionItem.parameter"
                                                v-text="sectionItem.text"
                                                class="my-2 ml-1 mr-1"
                                                :color="section === sectionItem.parameter ? 'primary' : 'secondary'"
                                        ></v-btn>
                                        <v-spacer></v-spacer>
                                    </v-card-actions>



                                    <static-section-editor
                                            :page="page"
                                            :section="section"
                                    ></static-section-editor>

                                </v-card>
                            </v-tab-item>



                    </v-tabs-items>
                </v-col>
            </v-row>








            <!--pop-up dialog for updating content-->
            <v-dialog v-model="dialog" max-width="750px">
                <v-card>
                    <v-card-title>
                        <div>Editor</div>
                    </v-card-title>
                    <v-card-text>

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

                    </v-card-text>
                    <v-card-actions>
                        <v-btn color="blue darken-1" text @click="closeDialog">Close</v-btn>
                        <v-spacer></v-spacer>
                        <v-btn color="primary" @click="makeRequestToUpdateContent">Update content</v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>


        </v-container>
    </div>
</template>

<script>

    import { Editor, EditorContent, EditorMenuBar, EditorMenuBubble } from 'tiptap';
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
    } from 'tiptap-extensions';
    import StaticSectionEditor from './../StaticSectionEditor'



    export default {
        name: 'StaticAboutUsPage',
        components: {
            EditorContent,
            EditorMenuBar,
            EditorMenuBubble,
            StaticSectionEditor
        },
        created() {
            axios.get('/api/static?page=about_us').then(response => {
                let data = response.data.data;
                this.about_page_what_we_do = data.about_page_what_we_do;
            });

            window.editorHtmlContent = '';
            setTimeout( () => {
                this.editor.setContent(''); // create function set content
                window.editorHtmlContent = ''; //
            }, 700);
            this.section = this.sections[0].parameter;
        },
        data() {
            return {

                page: 'about_us',
                section: '',
                sections: [
                    {
                        parameter: 'contact_us',
                        text: "Contact us",
                    },
                    {
                        parameter: 'club_membership',
                        text: "Club membership",
                    },
                ],


                // dialog section
                dialog: false,
                parameter: '',

                tab: 0,

                about_page_what_we_do: '',


                // editor related
                linkUrl: null,
                linkMenuIsActive: false,
                editor: new Editor({
                    onUpdate: ( { getHTML } ) => { // updating the content to be sent
                        window.editorHtmlContent = getHTML();
                    },
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
                    content: '', // edited content
                }),
            }
        },
        methods: {
            editWhatWeDo() {
                this.editor.setContent(this.about_page_what_we_do);
                window.editorHtmlContent = this.about_page_what_we_do;
                this.parameter = 'about_page_what_we_do';
                this.dialog = true;
            },

            closeDialog() {
                this.dialog = false;
            },
            makeRequestToUpdateContent() {
                let data = {
                    value: window.editorHtmlContent,
                };

                axios.post('/api/static?parameter=' + this.parameter, data)
                    .then(response => {
                        if (response.data.success) {
                            if (response.data.success) {
                                this[this.parameter] = window.editorHtmlContent;
                                this.dialog = false;
                                this.$store.dispatch('setAlert', {type: 'edit', name: 'content'});
                            }
                            this.dialog = false;
                        }
                    })
            },

            // editor related
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
                command({ href: url });
                this.hideLinkMenu()
            },
        },
        beforeDestroy() {
            this.editor.destroy()
        },
    }
</script>
