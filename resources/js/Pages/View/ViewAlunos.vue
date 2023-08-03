<template>
    <div>
        <Head :alunos="alunos" @atualizarAlunoSelecionado="atualizarAlunoSelecionado">
            <title>{{ aluno.nome }}</title>
        </Head>
        <Sidebar />

        <section class="d-flex justify-content-center align-items-center vh-100">
            <h1>View Alunos</h1>
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
    data() {
        return {
            alunoSelecionado: {
                nome: '', // Deixe em branco inicialmente, será preenchido quando um aluno for selecionado
            },
            aluno: [

            ],
        };
    },
    methods: {
        atualizarAlunoSelecionado(aluno) {
            this.alunoSelecionado = aluno;
        },
    },

};
</script>
