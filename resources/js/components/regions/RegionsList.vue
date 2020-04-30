<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="7">


                <v-data-table
                        :headers="headers"
                        :items="regions"
                        sort-by="date"
                        class="elevation-2"
                        @click:row="showItem"
                        :items-per-page="10"
                >

                    <template v-slot:item.filename="{ item }">
                        <div>
                            <v-img :src="'http://backend.test/' + item.filename" height="70" width="70"></v-img>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>Regions</v-toolbar-title>
                            <v-divider
                                    class="mx-4"
                                    inset
                                    vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" dark class="mb-2" @click="newItem">Add new region</v-btn>
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
            regions: [],
            headers: [
                {
                    text: 'Image',
                    align: 'start',
                    sortable: true,
                    value: 'filename',
                },
                { text: 'Title', value: 'title'},
                { text: 'Actions', value: 'actions', sortable: false },
            ],
            defaultItem: {
                filename: '',
                title: '',
                date: '',
            },
        }),
        mounted() {
            axios.get('/api/regions').then(response => {
                this.regions = response.data.data;
            });
        },
        methods: {
            showItem (row) {
                this.$router.push({ name: 'region-edit', params: { id: row.id } })
            },
            editItem (item) {
                this.$router.push({ name: 'region-edit', params: { id: item.id}})
            },
            deleteItem (item) {
                const index = this.regions.indexOf(item);
                if (confirm('Are you sure you want to delete this publication?')) {
                    axios.delete('/api/regions/' + item.id).then(response => {
                        if (response.data.success) {
                            this.regions.splice(index, 1);
                        }
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'region-create' });
            }

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
