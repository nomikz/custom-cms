<template>
    <div>
        <v-container class="fill-height">
            <v-row justfiy="center">

                <v-col cols="11">
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
                                    <v-col cols="3">

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

                                    <v-col cols="2">
                                        <v-checkbox
                                                v-model="isAllDay"
                                                label="All day"
                                        ></v-checkbox>
                                    </v-col>

                                    <v-col cols="3">
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
                                                        :disabled="isAllDay"
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



                                    <v-col cols="3">
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
                                                        :disabled="isAllDay"
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
                                        accept="image/png, image/jpeg, image/bmp"
                                        placeholder="Upload the Image"
                                        prepend-icon="mdi-camera"
                                        label="Hero image"
                                        v-on:change="handleImage"
                                        v-on:click:clear="heroImageUrl = ''"
                                        show-size
                                        hint="Recommended image size: 180*80 or 360*160 pixels. File format: PNG or JPG."
                                        persistent-hint
                                ></v-file-input>
                                <div style="color: #E53935;" v-text="this.uplaodMessage"></div>

                                <div class="image-preview" v-if="heroImageUrl.length>0">
                                    <v-img class="my-3" contain height="150" :src="heroImageUrl"></v-img>
                                </div>


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
        created() {
            axios.get('/api/events/' + this.$route.params.id).then(response => {
                let data = response.data.data;
                this.name = data.title;
                this.heroImageUrl = data.filename;

                let datesArr = data.date.split(' ');
                this.date = datesArr[0];
                if (datesArr.length < 2) {
                    this.isAllDay = true;
                    this.startTime = '';
                    this.finishTime = '';
                } else {
                    this.startTime = datesArr[1];
                    this.finishTime = datesArr[2];
                }
            });
        },
        data: () => ({
            rules: {
                required: value => !!value || 'Required.'
            },
            valid: true,

            name: '',

            heroImage: null,
            heroImageUrl: '',
            uplaodMessage: '',

            isAllDay: false,

            datePicker: false,
            date: new Date().toISOString().substr(0, 10),

            startTime: null,
            startTimePicker: false,

            finishTime: null,
            finishTimePicker: false,

        }),
        methods: {
            handleImage(file) {
                this.heroImageUrl = '';
                if (file.size > 5 * 1024 * 1024) {
                    this.uplaodMessage = 'Size of uploaded image is bigger than 5mb. Please upload another image.';
                    return;
                }
                this.heroImage = file;
                this.uplaodMessage = '';
                this.heroImageUrl = URL.createObjectURL(this.heroImage);
            },


            isAllDayRules() {
                if (this.isAllDay) {
                    return [this.rules.notRequired];
                } else {
                    return [this.rules.required];
                }
            },


            submit() {
                if(this.$refs.form.validate()) {

                    let date = this.date;
                    if (!this.isAllDay) {
                        date += ' ' + this.startTime;
                        date += ' ' + this.finishTime;
                    }

                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('image', this.heroImage);
                    formData.append('date', date);


                    axios.post('/api/events/' + this.$route.params.id, formData, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    }).then(response => {
                        if (response.data.success) {
                            this.$router.push({name: 'events'});
                        }
                    });
                }
            },
        },
        watch: {
            isAllDay: function (isTrue) {
                if (isTrue) {
                    this.startTime = 'All day';
                    this.finishTime = 'All day';
                } else {
                    this.startTime = '';
                    this.finishTime = '';
                }
            }
        }
    }
</script>

<style>
</style>
