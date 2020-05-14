<!--getItems-->

<!--governance-members-->
<!--members?region=auckland-->
<!--members?region=central-->
<!--members?region=lower-->
<!--members?region=canterbury-->
<!--members?region=otago-->

<!--modelName-->

<!--GovernanceMember-->
<!--Member-->

<!--back link-->

<!--governance-members-->
<!--members-->

<!--title of the page-->

<!--Governance Members-->
<!--Auckland and Northland-->
<!--Central North Island-->
<!--Canterbury Westland-->
<!--Otago Southland-->
<template>
    <v-card>
        <v-card-title>
            <p class="title" v-text="title"></p>
        </v-card-title>

        <v-card-text>


            <v-data-table
                    :headers="headers"
                    :items="items"
                    sort-by="order_number"
                    :order-desc="true"
                    hide-default-footer
            >
                <template v-slot:top>
                    <v-toolbar flat color="white">
                        <v-toolbar-title class="center-text">Edit order of appearance</v-toolbar-title>
                        <v-spacer></v-spacer>
                        <v-dialog v-model="dialog" max-width="350px">
                            <v-card>
                                <v-card-title>
                                    <span class="headline">Edit order</span>
                                </v-card-title>

                                <v-card-text>
                                    <v-container>
                                        <v-row>
                                            <v-col cols="7">
                                                <v-text-field readonly v-model="editedItem.name"></v-text-field>
                                            </v-col>
                                            <v-col cols="5">
                                                <v-text-field v-model="editedItem.order_number" label="Order"></v-text-field>
                                            </v-col>
                                        </v-row>
                                    </v-container>
                                </v-card-text>

                                <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
                                    <v-btn color="blue darken-1" text @click="save">Save</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-dialog>
                    </v-toolbar>
                </template>
                <template v-slot:item.actions="{ item }">
                    <v-icon
                            small
                            color="primary"
                            class="mr-2"
                            @click="editItem(item)"
                    >
                        mdi-pencil
                    </v-icon>
                </template>
            </v-data-table>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn
                    class="mr-2 mb-2"
                    color="secondary"
                    text
                    :to="{name: backLink}"
            >
                Back
            </v-btn>
        </v-card-actions>

    </v-card>
</template>


<script>
    export default {
        props: {
            title: String,
            getUrl: String,
            backLink: String,
            modelName: String,
        },
        data: () => ({
            dialog: false,
            headers: [
                {
                    text: 'Name',
                    value: 'name',
                    sortable: false,
                },
                { text: 'Order', value: 'order_number', sortable: false,},
                { text: 'Actions', value: 'actions', sortable: false,},
            ],
            items: [],
            editedIndex: -1,
            editedItem: {
                name: '',
                order_number: 0,
            },
            defaultItem: {
                name: '',
                order_number: 0,
            },

        }),
        methods: {
            getItems() {
                console.log(this.getUrl);
                axios.get('/api/' + this.getUrl).then(response => {
                    this.items = response.data.data;
                });
            },

            editItem (item) {
                this.editedIndex = this.items.indexOf(item);
                this.editedItem = Object.assign({}, item);
                this.dialog = true;
            },

            close () {
                this.dialog = false;
                this.$nextTick(() => {
                    this.editedItem = Object.assign({}, this.defaultItem);
                    this.editedIndex = -1;
                })
            },

            save () {
                if (this.editedIndex > -1) {
                    axios.put('/api/edit-order/' + this.editedItem.id + '?model=' + this.modelName + '&order_number=' + this.editedItem.order_number);
                    Object.assign(this.items[this.editedIndex], this.editedItem);
                }
                this.close()
            },
        },
        watch: {
            getUrl(val) {
                this.getItems();
            },
            dialog (val) {
                val || this.close()
            },
        }
    }
</script>
