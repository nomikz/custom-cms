<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="5">

                    <edit-order
                        title="Governance Members"
                        :getUrl="getUrl"
                        backLink="governance-members"
                        modelName="GovernanceMember"
                    ></edit-order>

                </v-col>

            </v-row>
        </v-container>
    </div>
</template>


<script>
    import EditOrder from './../EditOrder'

    export default {
        name: 'GovernanceMemberListEditOrder',
        mounted() {
            this.getUrl = 'governance-members';
        },
        data() {
            return {
                getUrl: '',
            }
        },
        components: {
            EditOrder
        },
    }
</script>

<style>
</style>
