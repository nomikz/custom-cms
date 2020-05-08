<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="9">
                    <v-card color="rgba(242, 242, 242, 0.53)">
                        <v-form
                                ref="form"
                                v-model="valid"
                        >

                            <v-card-text>
                                <!--title-->
                                <v-text-field
                                        ref="name"
                                        v-model="name"
                                        label="Event name"
                                        placeholder="Event name"
                                        :rules="[rules.required]"
                                ></v-text-field>

                                <!-- date time-start time-finish -->
                                <v-row>
                                    <v-col>

                                        <!--date-->
                                        <v-menu
                                                v-model="datePicker"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                transition="scale-transition"
                                                offset-y
                                                min-width="200px"
                                        >
                                            <template v-slot:activator="{ on }">
                                                <v-text-field
                                                        v-model="date"
                                                        label="Date of the event"
                                                        prepend-icon="mdi-calendar"
                                                        readonly
                                                        v-on="on"
                                                        :rules="[rules.required]"
                                                ></v-text-field>
                                            </template>
                                            <v-date-picker v-model="date" @input="datePicker = false"></v-date-picker>
                                        </v-menu>
                                    </v-col>


                                    <v-col>
                                        <!--time start-->
                                        <v-menu
                                                ref="startTime"
                                                v-model="startTimePicker"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                :return-value.sync="startTime"
                                                transition="scale-transition"
                                                offset-y
                                                max-width="200px"
                                                min-width="200px"

                                        >
                                            <template v-slot:activator="{ on }">
                                                <v-text-field
                                                        v-model="startTime"
                                                        label="Start time"
                                                        prepend-icon="mdi-watch"
                                                        readonly
                                                        v-on="on"
                                                        :rules="[rules.required]"
                                                ></v-text-field>
                                            </template>
                                            <v-time-picker
                                                    v-if="startTimePicker"
                                                    v-model="startTime"
                                                    full-width
                                                    @click:minute="$refs.startTime.save(startTime)"
                                            ></v-time-picker>
                                        </v-menu>
                                    </v-col>



                                    <v-col>
                                        <!--time finish-->
                                        <v-menu
                                                ref="finishTime"
                                                v-model="finishTimePicker"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                :return-value.sync="finishTime"
                                                transition="scale-transition"
                                                offset-y
                                                max-width="200px"
                                                min-width="200px"
                                        >
                                            <template v-slot:activator="{ on }">
                                                <v-text-field
                                                        v-model="finishTime"
                                                        label="Finish time"
                                                        prepend-icon="mdi-watch"
                                                        readonly
                                                        v-on="on"
                                                        :rules="[rules.required]"
                                                ></v-text-field>
                                            </template>
                                            <v-time-picker
                                                    v-if="finishTimePicker"
                                                    v-model="finishTime"
                                                    full-width
                                                    @click:minute="$refs.finishTime.save(finishTime)"
                                            ></v-time-picker>
                                        </v-menu>
                                    </v-col>

                                </v-row>


                                <!--heroimage-->
                                <v-file-input
                                        ref="heroImage"
                                        v-on:change="handleImage"
                                        accept="image/png, image/jpeg, image/bmp"
                                        placeholder="Upload the Image"
                                        prepend-icon="mdi-camera"
                                        label="Hero image"
                                        :rules="[rules.required]"
                                ></v-file-input>
                            </v-card-text>

                            <v-divider class="mt-4"></v-divider>
                            <v-card-actions>
                                <router-link tag="v-btn" :to="{ name: 'events' }" text>Cancel</router-link>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" text @click="submit">Submit</v-btn>
                            </v-card-actions>
                        </v-form>


                    </v-card>
                </v-col>

                <v-col cols="3"></v-col>
            </v-row>
        </v-container>
    </div>
</template>


<script>

    export default {
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },
            valid: true,

            name: '',
            heroImage: null,

            datePicker: false,
            date: new Date().toISOString().substr(0, 10),

            startTime: null,
            startTimePicker: false,

            finishTime: null,
            finishTimePicker: false,

        }),
        methods: {
            handleImage(file) {
                this.heroImage = file;
            },


            submit() {
                if(this.$refs.form.validate()) {

                    let date = this.date;
                    date += ' ' + this.startTime;
                    date += ' ' + this.finishTime;


                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('date', date);
                    formData.append('image', this.heroImage);

                    axios.post('/api/events', formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    }).then(response => {
                        if (response.data.success) {
                            this.$router.push({name: 'events'});
                        }
                    });
                }
            },
        },
    }
</script>

<style>
</style>
