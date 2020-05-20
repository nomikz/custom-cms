<template>
    <div>
        <v-row>
            <v-col
                    class="mx-auto"
                    cols="8"
            >
                <v-card
                        color="rgba(242, 242, 242, 0.53)"
                >
                    <v-card-text>

                        <v-form
                            ref="form"
                            v-model="valid"
                        >

                            <v-row>
                                <v-col cols="8">
                                    <!--title-->
                                    <v-text-field
                                            ref="title"
                                            v-model="title"
                                            label="Title"
                                            placeholder="Title"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="4">
                                    <v-checkbox
                                            v-model="is_visible"
                                            label="Visibility in menu"
                                            color="info"
                                            hide-details
                                    ></v-checkbox>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col>

                                    <!--on content changed-->
                                    <html-editor
                                        :content="text"
                                        v-on:contentUpdated="handleUpdate"
                                    ></html-editor>

                                </v-col>
                            </v-row>


                            <v-row>
                                <v-col cols="6">
                                    <v-text-field
                                            ref="phone"
                                            v-model="phone"
                                            label="Phone"
                                            placeholder="Phone"
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="6">
                                    <v-text-field
                                            ref="email"
                                            v-model="email"
                                            label="Email"
                                            placeholder="Email"
                                    ></v-text-field>
                                </v-col>
                            </v-row>



                            <v-row>
                                <v-col cols="2">
                                    <v-checkbox
                                            v-model="documentNotNeeded"
                                            label="Remove document?"
                                            color="info"
                                            hide-details
                                    ></v-checkbox>
                                </v-col>
                                <v-col cols="5">
<!--                                    :rules="documentNotNeeded ? [] : [rules.required]"-->
                                    <v-file-input
                                            ref="document"
                                            :disabled="documentNotNeeded"
                                            :placeholder="!!document_name ? 'File name: ' + document_name : 'Select document'"
                                            v-on:change="handleDocument"
                                            v-on:click:clear="docValidationText = ''"
                                            show-size
                                            prepend-icon="mdi-file"
                                    ></v-file-input>
                                    <div style="color: #E53935;" v-text="docValidationText"></div>
                                </v-col>
                                <v-col cols="5">
                                    <v-text-field
                                            ref="document-name"
                                            :disabled="documentNotNeeded"
                                            :rules="documentNotNeeded ? [] : [rules.required]"
                                            v-model="document_name"
                                            :required="!documentNotNeeded"
                                            label="Document name"
                                            placeholder="Document name"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                        </v-form>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="primary"  @click="submit">Submit</v-btn>
                        </v-card-actions>
                    </v-card-text>
                </v-card>

            </v-col>
        </v-row>

    </div>
</template>

<script>
    import HtmlEditor from './HtmlEditor'

    export default {
        created() {
            this.initialize(this.section);
        },
        components: {
            HtmlEditor
        },
        props: {
            page: String,
            section: String,
        },
        data() {
            return {
                rules: {
                    required: value => !!value || 'Required.',
                },
                valid: false,


                newText: '',

                docValidationText: '',
                documentNotNeeded: false,
                uploadedDocument: null,

                title: "",
                text: "",
                is_visible: false,
                phone: "",
                email: "",
                document_name: "",
            }
        },
        methods: {
            handleDocument(file) {
                if (file.size > 10 * 1024 * 1024) {
                    this.docValidationText = 'Size of uploaded document is bigger than 10 mb.';
                    return;
                }
                this.uploadedDocument = file;
                this.docValidationText = '';
            },
            handleUpdate(htmlText) {
                this.newText = htmlText;
            },
            initialize(section) {
                axios('/api/static-sections?page=' + this.page + '&section=' + section)
                    .then(response => {
                        let data = response.data.data;

                        this.is_visible = data.is_visible;
                        this.title = data.title;
                        this.text = data.text;
                        this.phone = data.phone ?? '';
                        this.email = data.email ?? '';
                        this.document_name = data.document_name;
                        if (!this.document_name) {
                            this.documentNotNeeded = true;
                        }
                        console.log('before send ' + 'phone' + this.phone + 'email'+  this.email);

                    });
            },
            submit() {
                if(this.$refs.form.validate()) {

                    if (!this.newText.length) {
                        this.newText = this.text;
                    }

                    let formData = new FormData();
                    formData.append('title', this.title);
                    formData.append('text', this.newText);
                    formData.append('phone', this.phone);
                    formData.append('email', this.email);
                    formData.append('is_visible', this.is_visible);
                    formData.append('documentNotNeeded', this.documentNotNeeded);
                    console.log('before send ' + 'phone' + this.phone + 'email'+  this.email);
                    if (!this.documentNotNeeded && this.uploadedDocument) {
                        formData.append('uploadedDocument', this.uploadedDocument); // document
                        formData.append('document_name', this.document_name); // document
                    }


                    axios.post('/api/static-sections?page=' + this.page + '&section=' + this.section, formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    })
                        .then(response => {
                            this.$store.dispatch('setAlert', {type: 'edit', name: 'content'});
                        });
                }
            }
        },
        watch: {
            section(sectionValue) {
                this.initialize(sectionValue);
            }
        },
        name: 'StaticSectionEditor',
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
