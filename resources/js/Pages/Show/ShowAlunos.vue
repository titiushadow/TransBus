    <template>
    <div>
        <Head title="Consultar Alunos" />
        <Sidebar />

        <main class="main flex-column">
            <h1>Lista de Alunos</h1>
            <ul>
            <li v-for="aluno in alunos" :key="aluno.id">
                {{ aluno.nome }} - {{ aluno.instituicao }} - {{ aluno.periodo }} - {{ aluno.curso }}
                {{ aluno.cpf }} - {{ aluno.destino }} - {{ aluno.email }}
            </li>
            </ul>
        </main>
    </div>
    </template>

    <script>
    import Sidebar from '@/Layouts/Sidebar.vue';
    import { Head } from '@inertiajs/vue3';

    export default {
    name: 'ShowAlunos',
    components: {
        Sidebar,
        Head,
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
    /* Adicione estilos conforme necessário */
    </style>
