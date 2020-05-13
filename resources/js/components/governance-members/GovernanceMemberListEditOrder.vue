<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="4">

                    <v-data-table
                            :headers="headers"
                            :items="items"
                            sort-by="order_number"
                            class="elevation-2"
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
                                    class="mr-2"
                                    @click="editItem(item)"
                            >
                                mdi-pencil
                            </v-icon>
                        </template>
                    </v-data-table>

                </v-col>

            </v-row>
        </v-container>
    </div>
</template>


<script>

    export default {
        created() {
            axios.get('/api/governance-members').then(response => {
                this.items = response.data.data;
                console.log(this.items)
            });
        },
        data: () => ({
            dialog: false,
            headers: [
                {
                    text: 'Name',
                    align: 'start',
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















        }),
        watch: {
            dialog (val) {
                val || this.close()
            },
        },
        methods: {
            submit() {

                if(this.$refs.form.validate()) {

                    axios.post('/api/governance-members', todo).then(response => {
                        if (response.data.success) {
                            this.$router.push({ name: 'governance-members' });
                        }
                    });

                }
            },

            editItem (item) {
                this.editedIndex = this.items.indexOf(item);
                this.editedItem = Object.assign({}, item);
                this.dialog = true
            },

            close () {
                this.dialog = false;
                this.$nextTick(() => {
                    this.editedItem = Object.assign({}, this.defaultItem);
                    this.editedIndex = -1
                })
            },

            save () {
                if (this.editedIndex > -1) {
                    Object.assign(this.items[this.editedIndex], this.editedItem);
                } else {
                    this.items.push(this.editedItem);
                }
                this.close()
            },

        },
    }
</script>

<style>
</style>
