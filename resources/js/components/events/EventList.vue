<template>
    <v-container class="fill-height">
        <v-row justfiy="center">
            <v-col cols="12">


                <v-data-table
                        :headers="headers"
                        :items="events"
                        class="elevation-2"
                        @click:row="showItem"
                        items-per-page="16"
                        sort-by="date"
                        sort-desc
                >

                    <template v-slot:item.filename="{ item }">
                        <div>
                            <v-img :src="item.filename" max-width="150"  max-height="120" contain></v-img>
                        </div>
                    </template>

                    <template v-slot:top>
                        <v-toolbar flat >
                            <v-toolbar-title>Events</v-toolbar-title>
                            <v-divider
                                    class="mx-4"
                                    inset
                                    vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" dark class="mb-2" @click="newItem">New event</v-btn>
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

            </v-col>
        </v-row>
    </v-container>
</template>


<script>
    export default {
        data: () => ({
            events: [],
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
        mounted() {
            axios.get('/api/events').then(response => {
                this.events = response.data.data;
            });
        },
        methods: {
            showItem (row) {
                this.$router.push({ name: 'event-edit', params: { id: row.id } })
            },
            sendNotification(item) {
                const data = {
                    id: item.id,
                    title: item.title,
                    type: 'event',
                };
                axios.post('/api/notification', data);
                this.$store.dispatch('setAlert', {type: 'notification', name: 'event'});
            },
            editItem (item) {
                this.$router.push({ name: 'event-edit', params: { id: item.id}})
            },
            deleteItem (item) {
                const index = this.events.indexOf(item);
                if (confirm('Are you sure you want to delete this publication?')) {
                    axios.delete('/api/events/' + item.id).then(response => {
                        this.events.splice(index, 1);
                        this.$store.dispatch('setAlert', {type: 'delete', name: 'event'});
                    });
                }
            },
            newItem () {
                this.$router.push({ name: 'event-create' });
            }

        },
    }
</script>

<style lang="scss">
tbody tr {
    cursor: pointer;
}

</style>
