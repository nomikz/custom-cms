<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="12">


                <v-data-table
                        :headers="headers"
                        :items="results"
                        class="elevation-2"
                        @click:row="showItem"
                        :items-per-page="12"
                        sort-by="date"
                        :sortDesc="true"
                        hide-default-footer

                >

                    <template v-slot:item.filename="{ item }">
                        <div>
                            <v-img :src="item.filename" max-width="150"  max-height="120" contain></v-img>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>Tournament Results</v-toolbar-title>
                            <v-divider
                                    class="mx-4"
                                    inset
                                    vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" dark class="mb-2" @click="newItem">New publication</v-btn>
                        </v-toolbar>
                    </template>

                    <template v-slot:item.notification="{ item }">
                        <v-btn
                                small
                                color="green"
                                @click.stop="sendNotification(item)"
                        >
                            <v-icon>mdi-bell-plus-outline</v-icon>
                        </v-btn>
                    </template>

                    <template v-slot:item.actions="{ item }">
                        <v-btn
                            small
                            color="orange lighten-3"
                            @click.stop="editItem(item)"
                        >
                            <v-icon class="mr-2">mdi-pencil</v-icon>
                        </v-btn>
                        <v-btn
                                @click.stop="deleteItem(item)"
                                small
                                color="red lighten-2"
                        >
                            <v-icon>mdi-delete</v-icon>
                        </v-btn>
                    </template>
                </v-data-table>
                <div class="text-center pt-2">
                    <v-pagination
                            @input="getItems"
                            v-model="page"
                            total-visible="10"
                            :length="pageCount"
                    >

                    </v-pagination>
                </div>

            </v-col>
        </v-row>
    </v-container>
</template>


<script>
    export default {
        mounted() {
            this.page = 1;
            this.getItems(this.page);
        },
        data: () => ({

            page: null,
            pageCount: null,


            results: [],
            headers: [
                {
                    text: 'Image',
                    align: 'start',
                    sortable: true,
                    value: 'filename',
                },
                { text: 'Title', value: 'title'},
                { text: 'Notification', value: 'notification'},
                { text: 'Date', value: 'date' },
                { text: 'Actions', value: 'actions', sortable: false },
            ],
            defaultItem: {
                filename: '',
                title: '',
                date: '',
            },
        }),
        methods: {
            getItems(page) {
                axios.get('/api/results?page=' + page).then(response => {

                    let resp = response.data;
                    console.log(resp);
                    this.results = resp.data;
                    this.page = resp.meta.current_page;
                    this.pageCount = resp.meta.last_page;
                });
            },
            showItem (row) {
                this.$router.push({ name: 'result-edit', params: { id: row.id } })
            },
            editItem (item) {
                this.$router.push({ name: 'result-edit', params: { id: item.id}})
            },
            sendNotification(item) {
                const data = {
                    id: item.id,
                    title: item.title,
                    type: 'result',
                };
                axios.post('/api/notification', data);
            },
            deleteItem (item) {
                const index = this.results.indexOf(item);
                if (confirm('Are you sure you want to delete this publication?')) {
                    axios.delete('/api/results/' + item.id).then(response => {
                        this.results.splice(index, 1);
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'result-create' });
            },


        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
