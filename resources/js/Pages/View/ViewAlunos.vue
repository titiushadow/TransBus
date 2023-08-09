<template>
    <div>
        <Head title="Visualizar aluno" />

        <Sidebar />

        <section class="d-flex justify-content-center">
            <div class="container-fluid">
                <div class="background-img-alunos"></div>
                <div class="d-flex align-center img-alunos">
                    <img src="/Images/cat.jpg" alt="cat">
                    <h1 v-for="aluno in alunos" :key="aluno.id" >{{ aluno.nome }}</h1>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Sidebar from '../../Layouts/Sidebar.vue';
import DataTables from '../../Components/DataTables.vue';
import { Head } from '@inertiajs/vue3';

export default {
    components: {
        Sidebar,
        Head,
        DataTables,
    },
    props: {
        alunos: {
            type: Object,
            required: true,
        },
    },
};
</script>
