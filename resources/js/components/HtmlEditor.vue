<template>
    <div>

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
        props: {
            content: String,
        },
        components: {
            EditorContent,
            EditorMenuBar,
            EditorMenuBubble
        },
        watch: {
            content(htmlText) {
                window.editorHtmlContent = htmlText;
                this.editor.setContent(htmlText);
            }
        },
        data() {
            return {
                // editor related
                linkUrl: null,
                linkMenuIsActive: false,
                editor: new Editor({
                    onUpdate: ( { getHTML } ) => {
                        this.$emit('contentUpdated', getHTML());
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
            }
        },
        methods: {
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
            this.editor.destroy();
        },
    }
</script>
