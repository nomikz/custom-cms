<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="12">


                <v-data-table
                        :headers="headers"
                        :items="news"
                        class="elevation-2"
                        @click:row="showItem"
                        :items-per-page="16"
                        sort-by="date"
                        sort-desc
                >

                    <template v-slot:item.filename="{ item }">
                        <div>
                            <v-img :src="'http://backend.test/' + item.filename" height="70" width="70"></v-img>
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


            </v-col>
        </v-row>
    </v-container>
</template>


<script>
    export default {
        data: () => ({
            news: [],
            headers: [
                {
                    text: 'Image',
                    align: 'start',
                    sortable: true,
                    value: 'filename',
                },
                { text: 'Title', value: 'title'},
                { text: 'Date', value: 'date' },
                { text: 'Actions', value: 'actions', sortable: false },
            ],
            defaultItem: {
                filename: '',
                title: '',
                date: '',
            },
        }),
        mounted() {
            axios.get('/api/articles').then(response => {
                this.news = response.data.data;
            });
        },
        methods: {
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
