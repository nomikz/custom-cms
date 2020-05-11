<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="9">


                <v-data-table
                        :headers="headers"
                        :items="governanceMembers"
                        sort-by="date"
                        class="elevation-2"
                        @click:row="showItem"
                        items-per-page="10"
                >
                    <template v-slot:item.image_url="{ item }">
                        <div>
                            <v-img :src="'/' + item.image_url" aspect-ratio="1.5" max-height="100" contain></v-img>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>Council Members</v-toolbar-title>
                            <v-divider
                                    class="mx-4"
                                    inset
                                    vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" dark class="mb-2" @click="newItem">Add new member</v-btn>
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
            governanceMembers: [],
            headers: [
                {
                    text: 'Image',
                    align: 'start',
                    sortable: true,
                    value: 'image_url',
                },
                { text: 'Name', value: 'name'},
                { text: 'Title', value: 'title'},
                { text: 'Actions', value: 'actions', sortable: false },
            ],
            regions: [],


        }),
        mounted() {
            axios.get('/api/governance-members').then(response => {
                this.governanceMembers = response.data.data;
            });

        },
        methods: {
            showItem (row) {
                this.$router.push({ name: 'governance-member-edit', params: { id: row.id } })
            },
            editItem (item) {
                this.$router.push({ name: 'governance-member-edit', params: { id: item.id}})
            },
            deleteItem (item) {
                const index = this.governanceMembers.indexOf(item);
                if (confirm('Are you sure you want to delete this member?')) {
                    axios.delete('/api/governance-members/' + item.id).then(response => {
                        this.governanceMembers.splice(index, 1);
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'governance-member-create' });
            }

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
