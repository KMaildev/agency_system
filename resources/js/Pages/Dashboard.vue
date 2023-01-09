<template>
    <div>
        <h1>Dashboard</h1>
        <a class="nav-link" @click="logout()">Sign Out</a>
    </div>
</template>
<script>
export default {
    methods: {
        logout() {
            this.$inertia.get(`logout`);
        },
    }
}
</script>