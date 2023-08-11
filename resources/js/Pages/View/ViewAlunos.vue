<template>
    <div>
        <Head title="Visualizar aluno" />

        <Sidebar />

        <section class="d-flex justify-content-center flex-column">
            <div class="container-fluid">
                <div class="background-img-alunos"></div>
                <div class="d-flex align-center img-alunos">
                    <img src="/Images/cat.jpg" alt="cat">
                    <div class="basic-info">
                        <h3 class="text-dark">{{ aluno.nome }}</h3>
                    </div>
                </div>
            </div>

            <div class="full-info">
                <div class="card">
                    <h2 class="text-center py-1">Informações do {{ aluno.nome }}</h2>
                    <div class="all-column">
                        <div class="first-column">
                            <h4 class="px-3">CPF:{{ aluno.cpf }}</h4>
                            <h4 class="px-3">Instituição:{{ aluno.instituicao }}</h4>
                            <h4 class="px-3">Periodo:{{ aluno.periodo }}</h4>
                        </div>

                        <div class="second-column">
                            <h4 class="px-3">Curso:{{ aluno.curso }}</h4>
                            <h4 class="px-3">Destino:{{ aluno.destino }}</h4>
                            <h4 class="px-3">Email:{{ aluno.email }}</h4>
                        </div>
                    </div>
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
    computed: {
        aluno() {
            // Supondo que você queira exibir apenas o primeiro aluno da lista
            return this.alunos[0];
        },
    },
};
</script>

<style>

.card {
    background-color: white;
    border: 3px solid #000;
    width: 60rem;
    height: 30rem;
    position: absolute;
    top: 29%;
    right: 11%;

}

.full-info {
    display: flex;
    justify-content: center;
    align-items: center;
}

.all-column {
    display: grid;
    grid-template-columns: repeat(2, 50%);
}

</style>
