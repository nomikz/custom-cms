<template>
    <div>


        <v-container
                class="fill-height"
        >
            show
        </v-container>
    </div>
</template>


<script>
    export default {
        data: () => ({

        }),

    }
</script>
<!--// Inside user-details component-->
<!--Vue.component('user-details', {-->
<!--methods: {-->
<!--onLinkClick() {-->
<!--this.$router.push({-->
<!--name: 'profile',-->
<!--params: {-->
<!--userId: 123,-->
<!--userData  // Hidden data/state-->
<!--}-->
<!--});-->
<!--}-->
<!--}-->
<!--});// Inside user-profile component-->
<!--Vue.component('user-profile', {-->
<!--created() {-->
<!--// Accessing piggy-bagged data-->
<!--if (this.$route.params.userData) {-->
<!--this.userData = this.$route.params.userData;-->
<!--} else {-->
<!--// Otherwise, make API call to get userData-->
<!--this.getUserDetails(this.$route.params.userId)-->
<!--.then(/* handle response */);-->
<!--}-->
<!--}-->
<!--});-->
