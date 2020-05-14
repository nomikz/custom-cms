<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="9">

<!--                member-edit-order-->
                <v-data-table
                        :headers="headers"
                        :items="members"
                        items-per-page="15"
                        class="elevation-2"
                        @click:row="showItem"
                        sort-by="name"
                >
                    <template v-slot:item.image_url="{ item }">
                        <div>
                            <v-img :src="item.image_url" max-width="100"  max-height="100" contain></v-img>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>Members</v-toolbar-title>
                            <v-divider
                                    class="mx-4"
                                    inset
                                    vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <v-btn  text class="mb-2 mr-2" @click="editOrder">Edit order of appearance</v-btn>
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
        created() {
            axios.get('/api/regions').then(response => {
                console.log(response.data.data);
                this.regions = response.data.data;
            });
        },
        mounted() {
            axios.get('/api/members').then(response => {
                this.members = response.data.data;
            });
        },
        data: () => ({
            members: [],
            headers: [
                {
                    text: 'Image',
                    align: 'start',
                    sortable: true,
                    value: 'image_url',
                },
                { text: 'Name', value: 'name'},
                { text: 'Title', value: 'title'},
                { text: 'Region', value: 'region.title'},
                { text: 'Actions', value: 'actions', sortable: false },
            ],
            regions: [],
        }),
        methods: {
            editOrder() {
                this.$router.push({ name: 'member-edit-order'});
            },
            showItem (row) {
                this.$router.push({ name: 'member-edit', params: { id: row.id } })
            },
            editItem (item) {
                this.$router.push({name: 'member-edit', params: {id: item.id}})
            },
            deleteItem (item) {
                const index = this.members.indexOf(item);
                if (confirm('Are you sure you want to delete this publication?')) {
                    axios.delete('/api/members/' + item.id).then(response => {
                        this.members.splice(index, 1);
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'member-create' });
            }

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
