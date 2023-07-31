    <template>
    <div>
        <Head title="Consultar Alunos" />
        <Sidebar />

        <section class="home">
            <h3 class="text-center fw-bold">Lista de Alunos</h3>
            <table class="table table-bordered w-50">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Instituição</th>
                    <th scope="col">CPF</th>
                </tr>
            </thead>
                <tbody>
                    <tr v-for="aluno in alunos" :key="aluno.id">
                    <th scope="row">{{ aluno.id }}</th>
                    <td>{{ aluno.nome }}</td>
                    <td>{{ aluno.email }}</td>
                    <td>{{ aluno.instituicao }}</td>
                    <td>{{ aluno.cpf }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
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

    </style>
