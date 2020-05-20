<template>
    <div>
        <router-view>
        </router-view>
    </div>
</template>

<script>
    export default {
        name: 'MainDashboard',
        created() {
            this.$router.push('/news');
        }
    }

</script>
