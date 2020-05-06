<template>
    <div>
        <v-container>
            <v-card
                    outlined
            >

            </v-card>


        </v-container>
    </div>
</template>

<script>


    export default {

        name: 'StaticRegionalPage',
        created() {
            axios.get('/api/static', {
                params: {
                    page: 'regional'
                }
            }).then(response => {
                console.log(response.data.data);
                let data = response.data.data;
                this.regional_information = data.regional_information;
                this.regional_page_short_description = data.regional_page_short_description
            });
        },
        data() {
            return {
                regional_information: '',
                regional_page_short_description: '',

            }
        }
    }
</script>
