<template>
    <div>
        <Head title="Consultar Alunos" />
        <Sidebar />

        <section class="d-flex justify-content-center align-items-center vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <DataTables :alunos="alunos" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Sidebar from '@/Layouts/Sidebar.vue';
import { Head } from '@inertiajs/vue3';
import DataTables from '@/Components/DataTables.vue';

export default {
    name: 'ShowAlunos',
    components: {
        Sidebar,
        Head,
        DataTables,
    },
    props: {
        alunos: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style>
.container {
    padding: 30px;
}
</style>
