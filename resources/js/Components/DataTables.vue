<template>
    <table id="DataTables" class="table table-striped table-bordered">
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
</template>

<script>
import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-bs5';
import 'datatables.net-buttons';
import 'datatables.net-buttons-bs5';

export default {
name: 'DataTables',
    props: {
        alunos: {
            type: Array,
            required: true,
        },
    },
    mounted() {
        $(this.$el).DataTable({
        paging: true,
        pageLength: 10,
            language: {
                search: 'Pesquisar:',
                lengthMenu: 'Mostrar _MENU_ registros por página',
                info: 'Mostrando página _PAGE_ de _PAGES_',
                paginate: {
                first: 'Primeira',
                last: 'Última',
                next: 'Próxima',
                previous: 'Anterior',
            },

                aria: {
                    sortAscending: ': Ordenar colunas de forma ascendente',
                    sortDescending: ': Ordenar colunas de forma descendente',
                },
                emptyTable: 'Nenhum registro encontrado',
                zeroRecords: 'Nenhum registro correspondente encontrado',
                sInfoFiltered: '(filtrado de _MAX_ registros no total)',
                sInfoEmpty: 'Mostrando 0 até 0 de 0 registros',
            },
        });
    },
};
</script>

<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
}

tr:hover {
    background-color: #f2f2f2;
}
</style>
