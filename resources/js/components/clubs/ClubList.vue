<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="8">

                <v-data-table
                        :headers="headers"
                        :items="clubs"
                        sort-by="region.title"
                        class="elevation-2"
                        @click:row="showItem"
                        :items-per-page="10"
                >

                    <template v-slot:item.description="{ item }">
                        <div>
                            <div class="cntr-text" v-html="shortenText(item.description)"></div>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>Clubs</v-toolbar-title>
                            <v-divider
                                    class="mx-4"
                                    inset
                                    vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" dark class="mb-2" @click="newItem">Add new club</v-btn>
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
            clubs: [],
            headers: [
                {
                    text: 'Name',
                    align: 'start',
                    value: 'description',
                },
                { text: 'Region', value: 'region.title'},
                { text: 'Actions', value: 'actions' },
            ],
        }),
        mounted() {
            axios.get('/api/clubs').then(response => {
                this.clubs = response.data.data;
            });
        },
        methods: {
            shortenText(text) {
                let index = text.indexOf('>', 4) + 1;
                return text.slice(0, index);
            },
            showItem (row) {
                this.$router.push({ name: 'club-edit', params: { id: row.id } })
            },
            editItem (item) {
                this.$router.push({ name: 'club-edit', params: { id: item.id}})
            },
            deleteItem (item) {
                const index = this.clubs.indexOf(item);
                if (confirm('Are you sure you want to delete this publication?')) {
                    axios.delete('/api/clubs/' + item.id).then(response => {
                        if (response.data.success) {
                            this.clubs.splice(index, 1);
                        }
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'club-create' });
            }

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}
.cntr-text p { // this is for vertical centering
    margin-bottom: 0 !important;
}
</style>
