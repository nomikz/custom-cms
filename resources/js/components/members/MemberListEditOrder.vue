<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="3">
                    <p>Edit order of appearance by reigon</p>
                    <v-select
                            :items="regions"
                            label="Regions"
                            v-model="region"
                            solo
                    ></v-select>
                </v-col>

                <v-col cols="5">

                    <edit-order
                            :title="title"
                            :getUrl="getUrl"
                            :backLink="backLink"
                            :modelName="modelName"
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
        components: {
            EditOrder
        },
        created() {
            this.region = this.regions[0];
        },
        data() {
            return {
                title: '',
                getUrl: '',
                backLink: '',
                modelName: '',

                region: '',

                regions: [
                    'Auckland and Northland',
                    'Central North Island',
                    'Lower North Island',
                    'Canterbury Westland',
                    'Otago Southland',
                ],
            }
        },
        watch: {
            region(region) {
                switch(region) {
                    case 'Auckland and Northland':
                        this.title = 'Auckland and Northland';
                        this.getUrl = 'members?region=auckland';
                        this.backLink = 'members';
                        this.modelName = 'Member';
                        break;
                    case 'Central North Island':
                        this.title = 'Central North Island';
                        this.getUrl = 'members?region=central';
                        this.backLink = 'members';
                        this.modelName = 'Member';
                        break;
                    case 'Lower North Island':
                        this.title = 'Lower North Island';
                        this.getUrl = 'members?region=lower';
                        this.backLink = 'members';
                        this.modelName = 'Member';
                        break;
                    case 'Canterbury Westland':
                        this.title = 'Canterbury Westland';
                        this.getUrl = 'members?region=canterbury';
                        this.backLink = 'members';
                        this.modelName = 'Member';
                        break;
                    case 'Otago Southland':
                        this.title = 'Otago Southland';
                        this.getUrl = 'members?region=otago';
                        this.backLink = 'members';
                        this.modelName = 'Member';
                        break;
                }
            }
        }
    }

    // getItems

    // governance-members
    // members?region=auckland
    // members?region=central
    // members?region=lower
    // members?region=canterbury
    // members?region=otago

    // modelName

    // GovernanceMember
    // Member

    // back link

    // governance-members
    // members

    // title of the page

    // Governance Members
    // Auckland and Northland
    // Central North Island
    // Canterbury Westland
    // Otago Southland
</script>

<style>
</style>
