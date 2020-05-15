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
                                <v-col cols="5">
                                    <v-text-field
                                            ref="document-name"
                                            :disabled="documentNotNeeded"
                                            v-model="document_name"
                                            label="Document name"
                                            placeholder="Document name"
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="5">
                                    <v-file-input
                                            ref="document"
                                            :disabled="documentNotNeeded"
                                            placeholder="Document"
                                            v-on:change="handleDocument"
                                            v-on:click:clear="docValidationText = ''"
                                            show-size
                                            hint="Document"
                                            persistent-hint
                                            prepend-icon="mdi-file"
                                    ></v-file-input>
                                    <div style="color: #E53935;" v-text="docValidationText"></div>
                                </v-col>

                                <v-col cols="2">
                                    <v-checkbox
                                            v-model="documentNotNeeded"
                                            label="Remove document?"
                                            color="info"
                                            hide-details
                                    ></v-checkbox>
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
                download_name: "#",
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
                axios('/api/static-sections?page' + this.page + '&section=' + section)
                    .then(response => {
                        let data = response.data.data;

                        this.is_visible = data.is_visible;
                        this.title = data.title;
                        this.text = data.text;
                        this.phone = data.phone;
                        this.email = data.email;
                        this.document_name = data.document_name;
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

                    if (!this.documentNotNeeded) {
                        formData.append('uploadedDocument', this.uploadedDocument); // document
                        formData.append('document_name', this.document_name); // document
                    }


                    axios.post('/api/static-sections?page=' + this.page + '&section=' + this.section, formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    })
                        .then(response => {
                            console.log(response.data.success);
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
