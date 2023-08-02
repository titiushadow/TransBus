<template>
    <div>
        <table id="DataTables" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th colspan="6" class="table-title text-center">
                        <h5 class="fw-bold">Lista de Alunos</h5>
                        <button class="btn btn-primary" @click="exportarPDF()">Exportar PDF</button>
                    </th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Instituição</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="aluno in alunos" :key="aluno.id">
                    <th scope="row">{{ aluno.id }}</th>
                    <td>{{ aluno.nome }}</td>
                    <td>{{ aluno.email }}</td>
                    <td>{{ aluno.instituicao }}</td>
                    <td>{{ aluno.cpf }}</td>
                    <td><button class="btn btn-primary btn-sm">Visualização</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import $ from 'jquery';
import pdfMake from 'pdfmake/build/pdfmake';
import pdfFonts from 'pdfmake/build/vfs_fonts';
import 'datatables.net';
import 'datatables.net-bs5';
import 'datatables.net-buttons';
import 'datatables.net-buttons-bs5';
import 'datatables.net-responsive-bs5';
import 'datatables.net-fixedheader-bs5';
import 'datatables.net-buttons/js/buttons.html5.js';
import 'jspdf';
import 'jspdf-autotable';

export default {
    name: 'DataTables',
    props: {
        alunos: {
        type: Array,
        required: true,
        },
    },
    mounted() {
        this.inicializarDataTables();
        pdfMake.vfs = pdfFonts.pdfMake.vfs;
    },
    methods: {
        exportarPDF() {
            const docDefinition = {
                content: [
                    {
                        table: {
                            headerRows: 1,
                            widths: [50, 100, 100, 100, 100],
                            body: [
                                [
                                    { text: 'ID', style: 'tableHeader' },
                                    { text: 'Nome', style: 'tableHeader' },
                                    { text: 'Email', style: 'tableHeader' },
                                    { text: 'Instituição', style: 'tableHeader' },
                                    { text: 'CPF', style: 'tableHeader' },
                                ],
                                // Dados dos alunos
                                ...this.alunos.map(aluno => [
                                    { text: aluno.id, style: 'tableText' },
                                    { text: aluno.nome, style: 'tableText' },
                                    { text: aluno.email, style: 'tableText' },
                                    { text: aluno.instituicao, style: 'tableText' },
                                    { text: aluno.cpf, style: 'tableText' },
                                ]),
                            ],
                        },
                    },
                ],
                styles: {
                    tableHeader: {
                        bold: true,
                        fontSize: 12,
                        color: 'black',
                    },
                    tableText: {
                        fontSize: 10,
                        color: 'black',
                    },
                },
            };

            pdfMake.createPdf(docDefinition).download('Lista_de_Alunos.pdf');
        },

        inicializarDataTables() {
            if ($.fn.DataTable.isDataTable('#DataTables')) {
                $(this.$el).DataTable().destroy();
            }

            $(this.$el).find('table').DataTable({
                paging: true,
                pageLength: 10,
                language: {
                search: 'Pesquisar:',
                lengthMenu: '',
                info: 'Mostrando página _PAGE_ de _PAGES_',
                paginate: {
                    first: 'Primeira',
                    last: 'Última',
                    next: 'Próxima',
                    previous: 'Anterior',
                },
                emptyTable: 'Nenhum registro encontrado',
                zeroRecords: 'Nenhum registro correspondente encontrado',
                sInfoFiltered: '(filtrado de _MAX_ registros no total)',
                sInfoEmpty: 'Mostrando 0 até 0 de 0 registros',
                },
            });
        },
    },
};
</script>

<style>
table {
    border-collapse: collapse;
}

th,
td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    white-space: nowrap;
}

th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
}

tr:hover {
    background-color: #f2f2f2;
}

.btn-sm {
    font-size: 12px;
    font-weight: bold;
}
</style>
