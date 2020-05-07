<template>
    <div>
        <v-container style="margin-left: 50px;">
            <v-row>
                <v-col>
                    <p class="display-1">Edit "Governance" page</p>
                </v-col>
            </v-row>

            <v-row>
                <v-col cols="12">

                    <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6" width="60%">
                        <p class="title">Short intro text</p>
                        <p class="body-1">Location: Below the title of the page</p>

                        <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                            <div v-html="governance_page_short_description"></div>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                    color="primary"
                                    dark
                                    @click="editDescription"
                            >
                                Edit text
                            </v-btn>
                        </v-card-actions>
                    </v-card>


                    <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6" width="60%">
                        <p class="title">Information section</p>
                        <p class="body-1">Location: Above the Council members sections</p>

                        <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                            <div v-html="governance_page_information"></div>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                    color="primary"
                                    dark
                                    @click="editInformation"
                            >
                                Edit text
                            </v-btn>
                        </v-card-actions>
                    </v-card>




                    <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6" width="60%">
                        <p class="title">Policy</p>
                        <p class="body-1">Location: Below the Council members sections</p>

                        <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                            <div v-html="governance_page_policy"></div>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                    color="primary"
                                    dark
                                    @click="editPolicy"
                            >
                                Edit text
                            </v-btn>
                        </v-card-actions>
                    </v-card>


                    <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6" width="60%">
                        <p class="title">Update policy document</p>

                        <v-form
                            ref="form"
                            v-model="valid"
                        >
                            <v-text-field
                                    v-model="governance_page_policy_document"
                                    label="Link text of the document"
                                    prepend-icon="mdi-file"
                                    :rules="[rules.required]"
                            ></v-text-field>
                            <v-card-text>
                                <v-file-input
                                        ref="resultDocument"
                                        @change="handleDocument"
                                        label="Document"
                                        outlined
                                        dense
                                        :rules="[rules.required]"
                                ></v-file-input>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                        color="primary"
                                        dark
                                        @click="makeRequestToUpdateDocument"
                                >
                                    Edit text
                                </v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-card>

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


    export default {
        name: 'StaticGovernancePage',
        components: {
            EditorContent,
            EditorMenuBar,
            EditorMenuBubble
        },
        created() {
            axios.get('/api/static').then(response => {
                let data = response.data.data;
                this.governance_page_short_description = data.governance_page_short_description;
                this.governance_page_information = data.governance_page_information;
                this.governance_page_policy = data.governance_page_policy;
                this.governance_page_policy_document = data.governance_page_policy_document;
                this.governance_page_policy_document_link_location = data.governance_page_policy_document_link_location;

            });

            window.editorHtmlContent = '';

            setTimeout( () => {
                this.editor.setContent(''); // creat function set content
                window.editorHtmlContent = ''; //
            }, 700);
        },
        data() {
            return {
                // dialog section
                dialog: false,
                parameter: '',

                governance_page_policy: '',
                governance_page_information: '',
                governance_page_short_description: '',
                governance_page_policy_document: '',

                valid: true,
                policyDocument: null,
                rules: {
                    required: value => !!value || 'Required.'
                },


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
            editDescription() {
                this.editor.setContent(this.governance_page_short_description);
                window.editorHtmlContent = this.governance_page_short_description;
                this.parameter = 'governance_page_short_description';
                this.dialog = true;
            },

            editInformation() {
                this.editor.setContent(this.governance_page_information);
                window.editorHtmlContent = this.governance_page_information;
                this.parameter = 'governance_page_information';
                this.dialog = true;
            },


            editPolicy() {
                this.editor.setContent(this.governance_page_policy);
                window.editorHtmlContent = this.governance_page_policy;
                this.parameter = 'governance_page_policy';
                this.dialog = true;
            },


            handleDocument(file) {
                this.policyDocument = file;
            },

            closeDialog() {
                this.dialog = false;
            },
            makeRequestToUpdateDocument() {
                if(this.$refs.form.validate()) {
                    let formData = new FormData();
                    formData.append('document', this.policyDocument);
                    formData.append('governance_page_policy_document', this.governance_page_policy_document);

                    axios.post('/api/static-policy-document', formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    });
                }
            },
            makeRequestToUpdateContent() {
                let data = {
                    value: window.editorHtmlContent,
                };

                axios.post('/api/static?parameter=' + this.parameter, data)
                    .then(response => {
                        if (response.data.success) {
                            this[this.parameter] = window.editorHtmlContent;
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
                command({ href: url })
                this.hideLinkMenu()
            },
        },
        beforeDestroy() {
            this.editor.destroy()
        },
    }
</script>
