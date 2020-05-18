<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="12">


                <v-data-table
                        :headers="headers"
                        :items="news"
                        class="elevation-2"
                        @click:row="showItem"
                        :items-per-page="12"
                        sort-by="date"
                        sort-desc
                        hide-default-footer
                >

                    <template v-slot:item.filename="{ item }">
                        <div>
                            <v-img :src="item.filename" max-width="150"  max-height="120" contain></v-img>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>News</v-toolbar-title>
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
                            color="orange lighten-3 mr-2"
                            @click.stop="editItem(item)"
                        >
                            <v-icon>mdi-pencil</v-icon>
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
        created() {
            this.page = 1;
            this.getItems(this.page);
        },
        data: () => ({

            page: null,
            pageCount: null,




            news: [],
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
                axios.get('/api/articles?page=' + page).then(response => {
                    let resp = response.data;
                    this.news = resp.data;
                    this.page = resp.meta.current_page;
                    this.pageCount = resp.meta.last_page;
                });
            },
            sendNotification(item) {
                const data = {
                    id: item.id,
                    title: item.title,
                    type: 'news',
                };
                axios.post('/api/notification', data);
            },
            showItem (row) {
                this.$router.push({ name: 'news-edit', params: { id: row.id } })
            },
            editItem (item) {
                this.$router.push({ name: 'news-edit', params: { id: item.id}})
            },
            deleteItem (item) {
                const index = this.news.indexOf(item);
                if (confirm('Are you sure you want to delete this publication?')) {
                    axios.delete('/api/articles/' + item.id).then(response => {
                        if (response.data.success) {
                            this.news.splice(index, 1);
                        }
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'news-create' });
            }

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
