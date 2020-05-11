<template>
    <div>
        <v-container style="margin-left: 50px;">


            <p class="display-2 text-center mt-6">Edit "Governance" page</p>



            <v-row>
                <v-col cols="12">
<!--                    <v-card>-->
                        <v-tabs
                                v-model="tab"

                        >
                            <v-tab key="0">Executive Board</v-tab>

                            <v-tab key="1">Constitution and Bylaws</v-tab>

                            <v-tab key="2">Dan Grade Council</v-tab>

                            <v-tab key="3">Referees Council</v-tab>

                            <v-tab key="4">Coaching Council</v-tab>

                            <v-tab key="5">Governance Review</v-tab>

                            <v-tab key="6">AGM Minutes</v-tab>
                        </v-tabs>

                        <v-tabs-items v-model="tab" class="pt-8 pb-8">
                            <v-row>
                                <v-col cols="2"></v-col>
                                <v-col cols="8">


                                    <v-tab-item :key="0">


                                        <!-- PAGE SHORT DESCRIPTION -->
                                        <!--                    <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6" width="60%">-->
                                        <!--                        <p class="title">Short intro text</p>-->
                                        <!--                        <p class="body-1">Location: Below the title of the page</p>-->

                                        <!--                        <v-card-text class="text&#45;&#45;primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">-->
                                        <!--                            <div v-html="governance_page_short_description"></div>-->
                                        <!--                        </v-card-text>-->

                                        <!--                        <v-card-actions>-->
                                        <!--                            <v-spacer></v-spacer>-->
                                        <!--                            <v-btn-->
                                        <!--                                    color="primary"-->
                                        <!--                                    dark-->
                                        <!--                                    @click="editDescription"-->
                                        <!--                            >-->
                                        <!--                                Edit text-->
                                        <!--                            </v-btn>-->
                                        <!--                        </v-card-actions>-->
                                        <!--                    </v-card>-->




                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Information</p>
                                            <p class="body-1">Location: Above the Council members sections</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_information"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_information')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>


                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
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
                                                        @click="setDialog('governance_page_policy')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>


                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Update policy document</p>
                                            <p class="body-1">Location: Right after policy text</p>

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
                                                <v-file-input
                                                        ref="resultDocument"
                                                        @change="handleDocument"
                                                        label="Document"
                                                        outlined
                                                        dense
                                                        :rules="[rules.required]"
                                                ></v-file-input>

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


                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Contacts </p>
                                            <p class="body-1">Location: At the bottom of the page</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_contacts"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_contacts')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>


                                    </v-tab-item>



                                    <v-tab-item
                                            :key="1"
                                    >
                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Dan Grade Council</p>
                                            <p class="body-1">Location: (Governanne page) Dan Grade Council</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_constitution_and_bylaws"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_constitution_and_bylaws')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-tab-item>


                                    <v-tab-item
                                            :key="2"
                                    >
                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Dan Grade Council</p>
                                            <p class="body-1">Location: (Governance page) Dan Grade Council</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_dan_grade_council"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_dan_grade_council')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-tab-item>




                                    <v-tab-item
                                            :key="3"
                                    >
                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Referees Council</p>
                                            <p class="body-1">Location: (Governance page) Referees Council</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_referees_council"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_referees_council')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-tab-item>



                                    <v-tab-item
                                            :key="4"
                                    >
                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Coaching Council</p>
                                            <p class="body-1">Location: (Governance page) Coaching Council</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_coaching_council"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_coaching_council')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-tab-item>



                                    <v-tab-item
                                            :key="5"
                                    >
                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">Governance Review</p>
                                            <p class="body-1">Location: (Governance page) Governance Review</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_governance_review"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_governance_review')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-tab-item>



                                    <v-tab-item
                                            :key="6"
                                    >
                                        <v-card color="rgba(223, 223, 223, 0.53)" class="px-8 py-4 mb-6">
                                            <p class="title">AGM Minutes</p>
                                            <p class="body-1">Location: (Governance page) AGM Minutes</p>

                                            <v-card-text class="text--primary pa-4 mb-3 white" style="border: 1px solid grey; border-radius: 1px;">
                                                <div v-html="governance_page_agm_council"></div>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn
                                                        color="primary"
                                                        dark
                                                        @click="setDialog('governance_page_agm_council')"
                                                >
                                                    Edit text
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-tab-item>

                                </v-col>
                            </v-row>
                        </v-tabs-items>

<!--                    </v-card>-->
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
                // removed this.governance_page_short_description = data.governance_page_short_description;

                // main
                this.governance_page_contacts = data.governance_page_contacts;
                this.governance_page_information = data.governance_page_information;
                this.governance_page_policy = data.governance_page_policy;
                this.governance_page_policy_document = data.governance_page_policy_document;
                this.governance_page_policy_document_link_location = data.governance_page_policy_document_link_location;


                // constitution and bylaws
                this.governance_page_constitution_and_bylaws = data.governance_page_constitution_and_bylaws;

                // dan grade council
                this.governance_page_dan_grade_council = data.governance_page_dan_grade_council;


                // referees council
                this.governance_page_referees_council = data.governance_page_referees_council;


                // coaching council
                this.governance_page_coaching_council = data.governance_page_coaching_council;


                // governance council
                this.governance_page_governance_review = data.governance_page_governance_review;


                // agm council
                this.governance_page_agm_council = data.governance_page_agm_council;
            });

            window.editorHtmlContent = '';

            setTimeout( () => {
                this.editor.setContent(''); // create function set content
                window.editorHtmlContent = ''; //
            }, 700);
        },
        data() {
            return {

                tab: null,



                // dialog section
                dialog: false,
                parameter: '',

                // removed governance_page_short_description: '',
                // main
                governance_page_information: '',
                governance_page_policy: '',
                governance_page_policy_document: '',
                governance_page_contacts: '',


                // constitution and bylaws
                governance_page_constitution_and_bylaws: '',

                // dan grade council
                governance_page_dan_grade_council: '',

                // referees council
                governance_page_referees_council: '',

                // coaching council
                governance_page_coaching_council: '',

                // governance council
                governance_page_governance_review: '',

                // agm council
                governance_page_agm_council: '',

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
            setDialog(modelName) {
                this.editor.setContent(this[modelName]);
                window.editorHtmlContent = this[modelName];
                this.parameter = modelName;
                this.dialog = true;
            },

            closeDialog() {
                this.dialog = false;
            },


            // TO HANDLE FILE
            handleDocument(file) {
                this.policyDocument = file;
            },
            // TO HANDLE FILE UPDATE
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



            // EDITOR RELATED
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
        beforeDestroy() { // lifecycle hook
            this.editor.destroy()
        },
    }
</script>
