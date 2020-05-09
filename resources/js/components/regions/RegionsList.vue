<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="7">


                <v-data-table
                        :headers="headers"
                        :items="regions"
                        class="elevation-2"
                        @click:row="showItem"
                        :items-per-page="10"
                        sort-by="title"
                >

                    <template v-slot:item.filename="{ item }">
                        <div>
                            <v-img :src="'/' + item.filename" height="70" width="70"></v-img>
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
                { text: 'Title', value: 'title'},
                { text: 'Actions', value: 'actions', sortable: false },
            ],
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

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
