<template>
    <div>
        <v-container
                class="fill-height"
                fluid
        >
            <v-row
                    align="center"
                    justify="center"
            >
                <h1>Dashboard</h1>
            </v-row>
        </v-container>

    </div>
</template>

<script>
    export default {
        name: 'MainDashboard',
        mounted() {
            axios.get('api/articles').then(response => {
                console.log(response.data);
            });
        }
    }
</script>
