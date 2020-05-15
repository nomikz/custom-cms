<template>
    <div>
        <v-container style="margin-left: 50px;">

            <p class="display-2 text-center mt-6">Tournament results page</p>


            <v-row>
                <v-col cols="12">
                    <v-card
                            outlined
                    >
                        <v-card-actions>
                            <v-spacer></v-spacer>

                            <v-btn
                                    v-for="sectionItem in sections"
                                    @click="section = sectionItem.parameter"
                                    v-text="sectionItem.text"
                                    class="my-2 ml-1 mr-1"
                                    :color="section === sectionItem.parameter ? 'primary' : 'secondary'"
                            ></v-btn>
                            <v-spacer></v-spacer>
                        </v-card-actions>



                        <static-section-editor
                                :page="page"
                                :section="section"
                        ></static-section-editor>

                    </v-card>

                </v-col>
            </v-row>

        </v-container>
    </div>
</template>

<script>
    import StaticSectionEditor from './../StaticSectionEditor';

    export default {
        components: {
            StaticSectionEditor,
        },
        created() {
            this.section = this.sections[0].parameter;
        },
        data() {
            return {
                page: 'tournament_results',
                section: '',
                sections: [
                    {
                        parameter: 'rules_and_regulations',
                        text: "Rules and regulations",
                    },
                    {
                        parameter: 'player_registration',
                        text: "Player registration",
                    },
                    {
                        parameter: 'national_squad_application',
                        text: "National squad application",
                    },
                    {
                        parameter: 'senior_athlete_management_pool',
                        text: "Senior athlete management pool",
                    },
                ],

            }
        },
        name: 'StaticAboutUsPage',
    }
</script>























