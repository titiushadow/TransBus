<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import Sidebar from '@/Layouts/Sidebar.vue';
</script>

<template>
    <Head title="Home" />
    <Sidebar />
    <main class="main">
        <h1>Estou na pagina inicial</h1>
    </main>
</template>
