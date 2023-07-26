<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import Sidebar from '@/Layouts/Sidebar.vue';
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <Sidebar />
    </AuthenticatedLayout>
</template>
